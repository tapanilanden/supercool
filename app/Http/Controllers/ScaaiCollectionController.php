<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Scaii;

class ScaaiCollectionController extends Controller
{
     public function index()
    {
        $scaais = Scaai::->orderBy('id', 'desc')->paginate(5);

        return view('scaais_collection.index')->withScaais($scaais);
        
    }
    
     public function show($id)
    {
        $scaai = Scaai::find($id);
        $user = User::find($scaai->user_id);
        return view('scaais_collection.show')->withScaai($scaai)->withUser($user);
    }
}
