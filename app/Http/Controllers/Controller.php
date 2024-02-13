<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\AddService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Services;

class Controller extends BaseController {

    function welcome() {
        return view('welcome');
    }

    function register(Request $request) {
        return redirect('register');
    }

    function get_user(Request $request) {


        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $this->middleware('guest')->except(['logout']);

        $email = $request->post('email');

        $password = $request->post('password');

        $passwordHash = bcrypt($password);

        $user = DB::table('test')->select('email')->get();

        if (User::where('email',$email)->exists()) {
            return redirect('/');
        } else {
            DB::table('test')->insert(
                ['email'=>$email, 'password' => $passwordHash]
            );
        }
    }
}

