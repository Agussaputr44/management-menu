<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PrimaryController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function getDashboard()
    {
        // Mengambil semua data pengguna
        $users = User::all();

        // Mengirim data pengguna ke view 'dashboard'
        return view('dashboard', compact('users'));
    }
    public function getAddUser()
    {

        return view('adduser');
    }

    public function postRegister(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_user' => 'required|string|max:30',
            'username' => 'required|string|max:30|unique:user',
            'email' => 'required|string|email|max:200|unique:user',
            'password' => 'required|string|min:8|confirmed',
            'no_hp' => 'required|string|max:30',
            'wa' => 'required|string|max:30',
            'pin' => 'required|string|max:30',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // Membuat pengguna baru
        $user = User::create([
            'id_user' => Str::random(29),
            'nama_user' => $request->nama_user,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'wa' => $request->wa,
            'pin' => $request->pin,
            'id_jenis_user' => 'user',
            'status_user' => 'active',
            'delete_mark' => '0',
            'create_by' => $request->nama_user,
            'update_by' => $request->nama_user,
        ]);

        // Redirect atau lakukan sesuatu setelah registrasi berhasil
        return redirect('/')->with('success', 'Registration successful! Please login.');
    }

    public function postLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Mengambil data pengguna yang sedang login
            $user = Auth::user();
    
            // Menyimpan data pengguna dalam session flash
            $request->session()->put('user', $user);
    
            return redirect()->intended('/dashboard');
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
