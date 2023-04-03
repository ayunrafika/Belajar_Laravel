<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }
    
    public function indexRegister()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function storeRegister(Request $request)
    {
        //Validation
        // dd($request->all());

        $validatedData = $request->validate([
            //"attribute_name" => "rules"
            "name" => "required|min:3|max:50",
            "email" => "required|email:dns|unique:users,email",
            "password" => "required|min:8|confirmed",
            "password_confirmation" => "required|min:8",
        ], [
            "name.required" => "Nama tidak boleh kosong!",
            "email.required" => "Email tidak boleh kosong!",
            "email.unique" => "Email sudah punya akun",
            "password.required" => "Password tidak boleh kosong!",
            "password_confirmation.required" => "Konfirmasi password tidak boleh kosong!",
            "name.min" => "Nama harus lebih dari 3 karakter",
            "password.min" => "Password harus lebih dari 3 karakter",
            "password_confirmation.min" => "Password harus lebih dari 3 karakter",
        ]);

        // Password Encryption
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Case jika name berbeda, misal bukan 'name' tapi 'nama'
        // User::create([
        //     "name" => $validatedData["name"],
        //     "password" => $validatedData["password"],
        //     "email" => $validatedData["email"],
        // ]);

        User::create($validatedData);

        return redirect("/auth/login");
    }

    public function storeLogin(Request $request)
    {
        // Validation
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        // Check Credentials
        if (Auth::attempt($credentials)) {
            // if succeed
            // regenerate session
            $request->session()->regenerate();
            
            // view Home, coba: jika login sbg Mahasiswa view ke Mahasiswa tambahin GATE
            return redirect()->intended('/home');
            
        }
        
        // if not succeed, then view alert message
        return back()->with("login-error", "Email atau Password Salah!");
    }

    public function storeLogout (Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth/login');
    }
}