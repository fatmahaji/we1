<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel';
    //return view('pages.index' , compact('title'));
    //or the following easy for arrays
    return view('pages.index')->with('title', $title);
    }

    public function status(){
        $title = 'Status';
    return view('pages.status')->with('title', $title);
    }

    public function guests(){
        $title = 'guests';
        return view('pages.guests')->with($title);
    }

    public function rooms(){
        $title = 'Rooms';
        return view('pages.rooms')->with($title);
    }

    public function nextCheckouts(){
        $title = 'nextCheckouts';
        return view('pages.nextCheckouts')->with($title);
    }

    public function admin(){
        $title = 'Admin';
        return view('pages.admin')->with($title);
    }
}
