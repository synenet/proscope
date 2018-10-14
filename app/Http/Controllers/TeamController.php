<?php

namespace App\Http\Controllers;

use App\Team;
use App\Project;
use App\Profile;
use App\Role;
use App\ProjectTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class TeamController extends Controller
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
        if (is_object($projects)) {
            $teams = Team::where('project_id', '=', $projects->id)->get();
            # code...
        }else{
            $teams = [];
        }
        

        
        return view('project.myteam.index')
        ->with('teams', $teams);
    }

    //  public function join()
    // {
    //     //

    //     return view('project.team.join')
    //     ->with('projects', Project::all);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uid = Auth::user()->id;
        
        $projects = Project::where('user_id' ,'=', $uid)->get()->first();
       
       // dd(count($teams));
        if (is_object($projects)) {
            
            $teams = ProjectTeam::where('project_id', '=', $projects->id)->get();
        }else{
            $teams = [];            
        }


        $ids =[];
       foreach ($teams as $team) {
           # code...
        $user = User::where('id','=', $team->user_id)->first();
        
        array_push($ids, $user);

       }

      //dd($ids);
        return view('project.myteam.index')
        ->with('teams', $ids)
        ->with('roles', Role::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_team_id'=>'required',
            'role_id' => 'required'

            ]);
        $uid = Auth::user()->id;
        
        $projects = Project::where('user_id' ,'=', $uid)->get()->first();
        Team::create([
            'project_team_id' => $request->project_team_id,
            'role_id' => $request->role_id,
            'project_id' => $projects->id

            ]);
        $oldteam = ProjectTeam::where('user_id', '=', $request->project_team_id)->first();
        $oldteam->delete();

        session()->flash('status', 'You have successfully added a user to your team');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
