<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $emplois = Job::latest()->get();
    return view('admin.job.index', compact('emplois'));
}


    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
                return view('admin.job.create');


 }


    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'type' => 'required|string|max:50',
        'deadline' => 'required|date',
        'description' => 'required|string',
        'skills_input' => 'nullable|string'
    ]);

    $job = new Job();
    $job->title = $validated['title'];
    $job->location = $validated['location'];
    $job->type = $validated['type'];
    $job->deadline = $validated['deadline'];
    $job->description = $validated['description'];
    $job->skills = $validated['skills_input'] ?? ''; // tu stockes la string
    $job->save();

    return redirect()->route('admin.emplois.index')->with('success', 'Offre créée avec succès.');
}

    /**
     * Display the specified resource.
     */
    
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
