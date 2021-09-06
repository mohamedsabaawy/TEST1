<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name'=>'admin',
           'email'=>'1@g.com',
           'password'=>bcrypt('12345678')
        ]);
    }
}
