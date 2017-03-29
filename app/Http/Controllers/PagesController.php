<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Scaai;
use App\User;

class PagesController extends Controller
{
    public function getIndex() {
        $scaai = Scaai::first();
        $user = User::find($scaai->user_id);
        return view('pages.welcome')->withScaai($scaai)->withUser($user);
    }
    
    public function getAbout() {
        return view('pages.about');
    }
    
}
