<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team;
use App\Models\news;
use App\Models\investigarions;
class dashboardController extends Controller
{
    public function dashboard(){
        $team_member=team::count();
        $news_count=news::count();
        $investigation_count=investigarions::count();
        return view('backend.index',compact('team_member','news_count','investigation_count'));
    }
}
