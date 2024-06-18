<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

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
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function postRegister(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_user' => 'required|string|max:30',
            'username' => 'required|string|max:30|unique:users',
            'email' => 'required|string|email|max:200|unique:users',
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

    public function postLogin(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username_email' => 'required|string',
            'password' => 'required|string',
            'pin' => 'required|string',
        ]);

        if (filter_var($credentials['username_email'], FILTER_VALIDATE_EMAIL)) {
            $fieldType = 'email';
        } else {
            $fieldType = 'username';
        }

        if (Auth::attempt([$fieldType => $credentials['username_email'], 'password' => $credentials['password']])) {
            $user = Auth::user();

            if ($user->pin !== $credentials['pin']) {
                Auth::logout();
                throw ValidationException::withMessages([
                    'pin' => ['The provided PIN is incorrect.'],
                ]);
            }

            return redirect('/dashboard');
        }

        throw ValidationException::withMessages([
            'username_email' => ['The provided credentials are incorrect.'],
        ]);
    }
}
