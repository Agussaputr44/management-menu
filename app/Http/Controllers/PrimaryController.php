<?php

namespace App\Http\Controllers;

use App\Models\Menu;
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
        $menus = Menu::all();

        // Mengirim data pengguna ke view 'dashboard'
        return view('dashboard', compact('users', 'menus'));
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
            'id_level' => 'sometimes|string|max:3', // Add validation rule if needed
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // Determine id_level (default to '002' if not provided)
        $id_level = $request->input('id_level', '002');

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
            'id_jenis_user' => $id_level,
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

            $user = Auth::user();

            $request->session()->put('user', $user);

            if ($user->id_jenis_user === '001') {
                return redirect('/dashboard');
            } else {
                return redirect('/dashboard-user');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function deleteUser($id_user): RedirectResponse
    {
        // Temukan pengguna berdasarkan id_user
        $user = User::find($id_user);

        if ($user) {
            $user->delete();
            return redirect('/dashboard')->with('success', 'User deleted successfully.');
        }

        return redirect('/dashboard')->with('error', 'User not found.');
    }
}
