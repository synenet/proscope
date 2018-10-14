<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;

class SearchController extends Controller
{
    //

    public function search(Request $request){

			if($request->ajax()){

			$output="";

			$products= DB::table('projects')->where('name','LIKE','%'.$request->search."%")->get();

			if($products){

				foreach ($products as $key => $product) {

				$output.='<div class="search_data">'.'<a href="project/show/'.$product->id.'">'.
				
				'<h5>'.$product->name.'</h5>'.

				

				'<small>'.$product->brief.'</small>'.

				'</a></div>';



					}
					return Response($output);

			 		}
			}else{

				$projects = Project::where('name','LIKE','%'.$request->search."%")->get();;

				return view('welcome')->with('projects',$projects);
			}
	}

}
