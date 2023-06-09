<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $projects = Project::all();
            return view('admin.projects.index', compact('projects'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('comics.create');
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
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\project  $project
         * @return \Illuminate\Http\Response
         */
        public function show(project $project)
        {
            dd($project);
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\project  $project
         * @return \Illuminate\Http\Response
         */
        public function edit(project $project)
        {
            $project = Project::findOrFail($id);
            return view('projects.edit', compact('project'));

        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\project  $project
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, project $project)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\project  $project
         * @return \Illuminate\Http\Response
         */
        public function destroy(project $project)
        {
            $project->delete();
            return redirect()->route('projects.index');
        }
    }

