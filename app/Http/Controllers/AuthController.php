<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        try {
            return view('login', ['title' => 'Masuk']);
        } catch (Exception) {
            return back()->with(['error' => 'Terjadi kesalahan sistem']);
        }
    }

    public function register()
    {
        try {
            return view('register', ['title' => 'Daftar']);
        } catch (Exception) {
            return back()->with(['error' => 'Terjadi kesalahan sistem']);
        }
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:255'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Input harus berupa email yang valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password harus terdiri dari minimal 8 karakter',
            'password.max' => 'Password tidak boleh melebihi 255 karakter',
        ]);
        try {
            $user = User::where('email', $credentials['email'])->first();

            if ($user && Hash::check($credentials['password'], $user->password)) {
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {
                return back()->with('error', 'Email dan password tidak sesuai')->withInput();
            }
        } catch (Exception) {
            return back()->with('error', 'Gagal masuk akun');
        }
    }

    public function registerPost(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255|confirmed',
            'password_confirmation' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Nama tidak boleh melebihi 255 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Input harus berupa email yang valid',
            'email.unique' => 'Email sudah terdaftar sebelumnya',
            'email.max' => 'Email tidak boleh melebihi 255 karakter',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password harus terdiri dari minimal 8 karakter',
            'password.max' => 'Password tidak boleh melebihi 255 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok dengan password',
            'password_confirmation.required' => 'Konfirmasi password wajib diisi',
        ]);

        try {
            // Enkripsi password
            $credentials['password'] = Hash::make($credentials['password']);

            User::create($credentials);
            return redirect()->route('login')->with('success', 'Akun sudah didaftarkan. Silahkan masuk dengan akun yang sudah dibuat.');
        } catch (Exception) {
            return back()->with('error', 'Gagal daftar akun');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Session auth yang menyimpan informasi user saat login dihapus.
        $request->session()->invalidate(); // Menghapus seluruh data session saat ini.
        $request->session()->regenerateToken(); // Regenerate CSRF token.
        return redirect()->route('login');
    }
}
