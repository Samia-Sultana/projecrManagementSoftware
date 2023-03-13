<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // Create a new project
    public function store(Request $request)
    {
        dd($request->data);
        $newProject = $request->validate([
            'project_name' => 'required|max:255',
            'project_start_date' => 'max:255',
            'project_end_date' => 'max:255',
            'project_budget' => 'max:255',
            'project_priority' => 'max:255',
            'project_manager' => 'max:255',
        ]);

        $user = Project::create([
            'project_name' => $newProject['project_name'],
            'project_description' => $request->project_description,
            'project_start_date' => $request->project_start_date,
            'project_end_date' => $request->project_end_date,
            'project_budget' => $request->project_budget,
            'project_priority' => $request->project_priority,
            'project_manager' => $request->project_manager,
        ]);

        return response()->json(['success_msg' => 'Project_saved'], 200);
    }

    // Show all projects
    public function show()
    {
        $projects = DB::table('projects')
        ->leftJoin('milestones', 'projects.id', "=", 'milestones.project_id')
        ->leftJoin('project_teams', 'projects.id', "=", 'project_teams.project_id')
        ->leftJoin('users', 'projects.project_manager', '=', 'users.id')
        ->select('projects.id', 'projects.project_name', 'projects.project_description', 'projects.project_start_date','projects.project_end_date','projects.project_budget','projects.project_priority','users.name as project_manager_name', DB::raw('GROUP_CONCAT( milestones.milestone_status) AS milestone_status'), DB::raw('GROUP_CONCAT( milestones.milestone_percentage) AS milestone_percentage'), DB::raw('GROUP_CONCAT(DISTINCT project_teams.user_id) AS team_members'))
        ->groupBy('projects.id', 'projects.project_name', 'projects.project_description', 'projects.project_start_date','projects.project_end_date','projects.project_budget','projects.project_priority', 'projects.project_manager', 'project_manager_name')
        ->get();

        $members = DB::table('users')->select('users.id','users.name')->get();

        return response()->json(['projects'=>$projects, 'members'=>$members]); 
    }

    // Update a Project
    public function update(Request $request)
    {

        $project = Project::where('id',$request->project_id)->firstOrFail();

        $project->project_name = $request->has('project_name') ? $request->input('project_name') : $project->project_name;
        $project->project_description = $request->has('project_description') ? $request->input('project_description') : $project->project_description;
        $project->project_start_date = $request->has('project_start_date') ? $request->input('project_start_date') : $project->project_start_date;
        $project->project_end_date = $request->has('project_end_date') ? $request->input('project_end_date') : $project->project_end_date;
        $project->project_budget = $request->has('project_budget') ? $request->input('project_budget') : $project->project_budget;
        $project->project_priority = $request->has('project_priority') ? $request->input('project_priority') : $project->project_priority;
        $project->project_manager = $request->has('project_manager') ? $request->input('project_manager') : $project->project_manager;

        $project->save();

        return response()->json([
            'success_msg' => 'Project_updated',
        ]);
    }

    // Delete a project
    public function destroy(Request $request)
    {
        Project::where('id','=',$request->project_id)->delete();

        return response()->json([
            'success_msg' => 'Project_deleted',
        ]);
    }

  
}
