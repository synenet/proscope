<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([

        	'name'=>'admin',
        	'email'=>'admin@projectscope.com',
        	'password'=>Hash::make('ogunniran')
        	]);
    }
}
