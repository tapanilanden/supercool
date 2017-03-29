<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Scaai;
use App\User;

class ScaaiCollectionController extends Controller
{
     public function getIndex()
    {
        $scaais = Scaai::orderBy('id', 'desc')->paginate(5);

        return view('scaais_collection.index')->withScaais($scaais);
        
    }
    
     public function getShow($id)
    {
        $scaai = Scaai::find($id);
        $user = User::find($scaai->user_id);
        return view('scaais_collection.show')->withScaai($scaai)->withUser($user);
    }
}
