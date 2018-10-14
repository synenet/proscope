<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         Role::create([

        	'name'=>'Project Manager',
        	'description'=>'Manages and co-ordinates the activities of the project from start to finish',
        	
        	]);

         Role::create([

        	'name'=>'Co-ordinator',
        	'description'=>'Co-ordinates the specific activities of the project from start to finish',
        	
        	]);
 
    }
}
