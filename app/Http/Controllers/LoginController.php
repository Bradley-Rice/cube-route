<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse

    {

        $credentials = $request->validate([

            'email' => ['required', 'email'],

            'password' => ['required'],

        ]);
 

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            if(session_status()===2){
                session_destroy();
                session_start();

                

                return redirect()->intended();

            }
            else
            {
                session_start();
                return redirect()->intended();
            }
            

        }

 

        return back()->withErrors([

            'email' => 'The provided credentials do not match our records.',

        ])->onlyInput('email');

    }
}
