<?php

namespace App\Http\Controllers;

use App\Models\investigarions;
use Illuminate\Http\Request;
use App\Models\investigarion_content;
class InvestigarionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investigation=investigarions::orderBy('id','Desc')->get();
        $investigations = investigarions::with('investigation_contents')->orderby('id','DESC')->get();
       return view('backend.investigation.all_investigation',compact('investigation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.investigation.add_investigation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $investigation=investigarions::insert([
            'title' => $request->title,
           
        ]);
    //    return $latestId = $investigation->id; // This is the ID of the newly created record
     $investigation=investigarions::orderBy('id','Desc')->limit(1)->first();
      $latestId=$investigation->id;


        $titles = $request->input('sub_title'); // Array of subtitles
        $details = $request->input('details');  // Array of details


        if ($titles && $details && count($titles) == count($details)) {
          
            foreach ($titles as $index => $subtitle) {
                $detail = $details[$index];
    
                // Example: save to database (adjust model/fields as needed)
                investigarion_content::create([
                    'sub_title' => $subtitle,
                    'description' => $detail,
                    'title_id' => $latestId,
                ]);
            }
        }

        $investigation_content=investigarion_content::orderBy('id','DESC')->limit(1)->first();
        $investigation_content_id=$investigation_content->id;

        investigarion_content::findOrFail($investigation_content_id)->delete();

        return redirect()
        ->route('investigation');
    }

    /**
     * Display the specified resource.
     */
    public function show(investigarions $investigarions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $investigation = investigarions::findOrFail($id);

         $investigation_content=investigarion_content::where('title_id',$id)->get();

        

        return view('backend.investigation.edit_investigation', compact('investigation','investigation_content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, investigarions $investigarions)
    {
        $investigation_id = $request->id;
        investigarions::findOrFail($investigation_id)->update([
            'title' => $request->title,
          
        ]);
        return redirect()
        ->route('investigation');
    } 


    public function updateContent(Request $request){
       return $investigation_id = $request->content_id;
        investigarion_content::findOrFail($investigation_id)->update([
            'details' => $request->about,
        ]);
        return redirect()
        ->route('methodhology');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(investigarions $investigarions,$id)
    {
        investigarions::findOrFail($id)->delete();
        investigarion_content::where('title_id',$id)->delete();

        return redirect()
        ->route('investigation');
    }
}
