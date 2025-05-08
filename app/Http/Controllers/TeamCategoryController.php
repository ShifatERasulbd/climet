<?php

namespace App\Http\Controllers;

use App\Models\team_category;
use Illuminate\Http\Request;

class TeamCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $team_category=team_category::orderBy('id','ASC')->get();
        return view('backend.team_category.all_team_category',compact('team_category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.team_category.add_team_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        team_category::insert([
            'category_name' => $request->category_name,
           
        ]);
        return redirect()
        ->route('team_category');
    }

    /**
     * Display the specified resource.
     */
    public function show(team_category $team_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team_category $team_category,$id)
    {
        //

        $team_category=team_category::findOrFail($id);
        return view('backend.team_category.edit_team_category',compact('team_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, team_category $team_category)
    {
        //
        $team_category = $request->id;
        team_category::findOrFail($team_category)->update([
            'category_name' => $request->category_name,
            
        ]);
        return redirect()
        ->route('team_category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team_category $team_category,$id)
    {
        //
        team_category::findOrFail($id)->delete();

        return redirect()
        ->route('team_category');
    }
}
