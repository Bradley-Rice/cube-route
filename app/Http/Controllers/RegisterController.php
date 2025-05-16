<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $userData = $request->validate([

            'name' => ['required', 'string'],

            'email' => ['required', 'email'],

            'usertype' => ['required', 'int'],

            'password' => ['required'],   

        ]);



        if(str_contains($request['email'],"@cuberoute.co.za")){

            $userData['usertype'] = 1;

            $userData['password'] = bcrypt($userData['password']);

            $user = User::create($userData);

        }
        else
        {
            $userData['password'] = bcrypt($userData['password']);
    
            $user = User::create($userData);
        }
        

        


        Auth::login($user);

        return redirect('/login');


    }
}
