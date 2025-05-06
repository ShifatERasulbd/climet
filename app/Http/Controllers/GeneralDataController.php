<?php

namespace App\Http\Controllers;

use App\Models\general_data;
use Illuminate\Http\Request;

class GeneralDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }

    public function about(){
         $about = general_data::where('title','About')->get();
        return view('backend.about.all_about', compact('about'));
    }


    public function AboutEdit($id){
        $about = general_data::findOrFail($id);
        return view('backend.about.edit_about', compact('about'));
   }


   public function AboutUpdate(Request $request){
    $About_id = $request->id;
    general_data::findOrFail($About_id)->update([
        'details' => $request->about,
    ]);
    return redirect()
    ->route('about');


}


public function AboutAdd(){
    
   return view('backend.about.add_about');
}

public function AboutStore(Request $request){
    general_data::insert([
        'details' => $request->about,
        'title'=>'About'
        
    ]);
    return redirect()
    ->route('about');
}

public function AboutDelete($id){
    general_data::findOrFail($id)->delete();

    return redirect()
    ->route('about');
}






public function Methodology(){
    $methodology = general_data::where('title','Methodology')->get();
   return view('backend.methodology.all_methodology', compact('methodology'));
}


public function addMethodology(){
    
    return view('backend.methodology.add_methodology');
 }



 
public function MethodologyStore(Request $request){
    general_data::insert([
        'details' => $request->methodology,
        'title'=>'Methodology'
        
    ]);
    return redirect()
    ->route('methodhology');
}




public function MethodologyEdit($id){
    $methodology = general_data::findOrFail($id);
    return view('backend.methodology.edit_methodology', compact('methodology'));
}



public function MethodologyUpdate(Request $request){
    $Methodology_id = $request->id;
    general_data::findOrFail($Methodology_id)->update([
        'details' => $request->about,
    ]);
    return redirect()
    ->route('methodhology');
}


public function MethodologyDelete($id){
    general_data::findOrFail($id)->delete();

    return redirect()
    ->route('methodhology');
}



public function Contact(){
    $contact = general_data::where('title','Contacts')->get();
   return view('backend.contact.all_contact', compact('contact'));
}


public function addContact(){
    
    return view('backend.contact.add_contact');
 }


 public function ContactStore(Request $request){
    general_data::insert([
        'details' => $request->contact,
        'title'=>'Contacts'
        
    ]);
    return redirect()
    ->route('contact');
}



public function ContactEdit($id){
    $contact = general_data::findOrFail($id);
    return view('backend.contact.edit_contact', compact('contact'));
}





public function ContactUpdate(Request $request){
    $contact_id = $request->id;
    general_data::findOrFail($contact_id)->update([
        'details' => $request->contact,
    ]);
    return redirect()
    ->route('contact');
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
    public function show(general_data $general_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(general_data $general_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, general_data $general_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(general_data $general_data)
    {
        //
    }
}
