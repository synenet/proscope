<?php

namespace App\Http\Controllers;

use App\Project;
use App\Category;
use App\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $uid = Auth::user()->id;
        $projects = Project::where('user_id' ,'=', $uid)->get()->first();
       //dd($projects);
        if (is_object($projects)) {

            //dd($projects->timelines()->get());
             return view('project.index')
            ->with('projects', $projects);
        }else{
            return view('project.show');
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        //dd($categories);
        return view('project.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([

            'name' =>'required ',
            'brief' => 'required',
            'user' => 'required',
            'description' => 'required',
            'banner' => 'required |image',
            'start_date' => 'required',
            'completion_date' => 'required|date',
            'category' => 'required'

            ]);

        $logo = $request->logo->store('logo');
        $banner = $request->banner->store('banner');

        Project::create([

            'name' => $request->name,
            'brief' => $request->brief,
            'description' => $request->description,
            'logo' => $logo,
            'banner' => $banner,
            'start_date' => $request->start_date,
            'completion_date' => $request->completion_date,
            'category_id' => $request->category,
            'user_id' => $request->user
            ]);


         session()->flash('status', 'Post Created Successfully.');

         return redirect()->route('project.index');
        //dd(Project::all()->first()->banner);
         $projects = Project::all()->first();
         $timeline_id = $request->projects->id;
         return view('project.show')
         ->with('projects', $projects)
         ->with('timelines', Timeline::where('project_id', '=', $timeline_id));




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $id)
    {
        //
      //$projects = Project::find('$id');
      //dd($id);
      return view('project.display')->with('projects', $id);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
