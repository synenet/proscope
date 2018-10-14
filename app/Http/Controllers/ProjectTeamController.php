<?php

namespace App\Http\Controllers;

use App\ProjectTeam;
use Illuminate\Http\Request;
use App\Project;
class ProjectTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('project.team.index');
    }

     public function join()
    {
        //

        return view('project.team.join')
        ->with('projects', Project::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'user_id' => 'required',
            'project_id' => 'required'
            ]);

        ProjectTeam::create([
            'user_id' => $request->user_id,
            'project_id' => $request->project_id
            ]);
        session()->flash('status','You have successfully registered for this projects');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectTeam  $projectTeam
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectTeam $projectTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectTeam  $projectTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectTeam $projectTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectTeam  $projectTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectTeam $projectTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectTeam  $projectTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectTeam $projectTeam)
    {
        //
    }
}
