<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Minuman;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
    
    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (Login::checkCredentials($username, $password)) {
            session(['username' => $username]);
            return redirect('/dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Login gagal! Username atau password salah.');
        }
    }

    public function Dashboard()
    {
        $minuman = Minuman::getAll();  
        return view('dashboard', compact('minuman'));
    }

    public function pengelolaan()
    {
        $minuman = Minuman::getAll();  
        return view('pengelolaan', compact('minuman'));  
    }    

    public function profile()
    {
        $username = session('username');
        return view('profile', compact('username'));
    }

    public function logout()
    {
        session()->forget('username'); 
        return redirect('/login');
    }
}
