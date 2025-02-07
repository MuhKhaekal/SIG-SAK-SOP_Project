<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\School;
use Illuminate\Http\Request;

class UserDaftarSekolah extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $school = School::findorfail($id);
        $comments = Comment::where('school_id', $school->id)
        ->join('users', 'comments.user_id', 'users.id')
        ->get();
        return view('dashboard.user.detail-sekolah', compact('school', 'comments'));
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
