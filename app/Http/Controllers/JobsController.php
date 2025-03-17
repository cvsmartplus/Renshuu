<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */    
    public function index()
    {
        $jobs = Job::with(['company.biodata', 'category'])->get();

        return inertia('Job', [
            'allJobListings' => $jobs
        ]);
    }






    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Cari pekerjaan berdasarkan slug
        $job = Job::where('slug', $slug)->with('company.biodata', 'category')->firstOrFail();

        return Inertia::render('Job/SingleJob', [
            'job' => $job
        ]);
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
