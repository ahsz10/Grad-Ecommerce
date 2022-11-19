<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
// use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'ali',
            'email' => "ali@gmail.com"
        ]);
        $user2 = User::make([
            'name' => 'mohamed',
            'email' => "mohamed@yahoo.com"
        ]);

        $this->assertTrue($user1->name != $user2->name);

    }

    public function test_user_delete(){
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }

    // public function test_it_stores_new_users(){
    //     $response = $this->post('/register',[
    //         'name' => 'ahmad',
    //         'email' => 'ahmad@gmail.com',
    //         'password' => '12345678',
    //         'confirm_password' => '12345678',
    //     ]);


    //     $response->assertRedirect('/home');
    // }



    public function test_database(){
        $this->assertDatabaseMissing('users',[
            'name' => 'temp'
        ]);
    }

}
