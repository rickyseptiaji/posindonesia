<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
  // Fungsi untuk menampilkan halaman registrasi
  public function showRegisterForm()
  {
    return view('auth.register');
  }

  // Fungsi untuk menangani registrasi
  public function register(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:8|confirmed',
      'role' => 'required|string|in:user,admin',
    ]);
    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput();
    }

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'role' => $request->role,
    ]);
    Auth::login($user);


    return redirect('dashboard');
    //   Return Redirect isi dengan dashboard admin
  }

  // Fungsi untuk menampilkan halaman login
  public function showLoginForm()
  {
    return view('auth.login');
    //   Return ini diisi dengan format nama_folder.nama_file
  }

  // Fungsi untuk menangani login
  public function login(Request $request)
  {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
      return redirect()->intended('dashboard');
    }

    return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput();
  }

  // Fungsi untuk menangani logout
  public function logout()
  {
    Auth::logout();
    return redirect('/login');
  }
}
