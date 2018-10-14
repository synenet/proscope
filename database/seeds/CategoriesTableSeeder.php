<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         Category::create([

        	'name'=>'Social',
        	'description'=>'Describes projects relating to social initiatives',
        	
        	]);
         Category::create([

        	'name'=>'Non-profit',
        	'description'=>'Describes intitiatives geared towards non-profit motives',
        	
        	]);
         Category::create([

        	'name'=>'Business',
        	'description'=>'Describes business related projets and likes',
        	
        	]);
 
 
 
    }
}
