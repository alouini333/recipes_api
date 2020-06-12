<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'John Doe';
        $user->email = 'John.Doe@example.com';
        $user->password = 'secret';
        $user->api_key = '!Api_Key!';
        $user->save();
    }
}
