<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Resume;

class JobseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    

    public function index(): Response  //Checking if the jobseeker current user has resume built or other stuffs
    {
        $user_id = Auth::id();
        // Check if the user has a resume row
        $hasResume = Resume::where('user_id', $user_id)->exists();

        // Pass the result to the view and render it
        return Inertia::render('Dashboard/Jobseeker', [
            'hasResume' => $hasResume,
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
    public function show(string $id)
    {
        //
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
