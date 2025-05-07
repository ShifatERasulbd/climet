<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = team::orderby('id','DESC')->get();
        return view('backend.team.all_team', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.add_team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        team::insert([
            'name' => $request->name,
            'position'=>$request->position,
            'details'=>$request->details,
            'category_name'=>$request->category_name
        ]);
        return redirect()
        ->route('team');
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team,$id)
    {
        $team = team::findOrFail($id);
        return view('backend.team.edit_team', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, team $team)
    {
        $team_id = $request->id;
        team::findOrFail($team_id)->update([
            'name' => $request->name,
            'position'=>$request->position,
            'details'=>$request->details,
            'category_name'=>$request->category_name
        ]);
        return redirect()
        ->route('team');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team $team,$id)
    {
        team::findOrFail($id)->delete();

        return redirect()
        ->route('team');
    }
}
