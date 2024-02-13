<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test  */
    public function register()
    {
        function get_user(Request $request) {


            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

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


}
