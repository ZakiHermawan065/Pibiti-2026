<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin ()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (
            $request->username === "admin"
            &&
            $request->password === "88888888"
        ) {
            session([
                'is_logged_in' => true,
                'username' => 'admin'
            ]);

            return redirect('/');
        }
        return back();
    }

    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}
