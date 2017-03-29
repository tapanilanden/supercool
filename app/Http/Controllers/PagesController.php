<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex() {
        return view('pages.welcome');
    }
    
    public function getAbout() {
        return view('pages.about');
    }
    
}
