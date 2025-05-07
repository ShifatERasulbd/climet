<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = news::orderby('id','DESC')->get();
        return view('backend.news.all_news', compact('news'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.news.add_news');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        news::insert([
            'title' => $request->title,
            'publish_date'=>$request->publish_date,
            'short_description'=>$request->short_description,
            'redirect_link'=>$request->redirection_link
        ]);
        return redirect()
        ->route('news');
    }

    /**
     * Display the specified resource.
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(news $news,$id)
    {
        $news = news::findOrFail($id);
        return view('backend.news.edit_news', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, news $news)
    {
        $news_id = $request->id;
        news::findOrFail($news_id)->update([
            'title' => $request->title,
            'publish_date'=>$request->publish_date,
            'short_description'=>$request->short_description,
            'redirect_link'=>$request->redirection_link
        ]);
        return redirect()
        ->route('news');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(news $news,$id)
    {
        news::findOrFail($id)->delete();

        return redirect()
        ->route('news');
    }
}
