<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Scaai;
use Session;
use Illuminate\Support\Facades\Auth;
use App\User;

class ScaaisController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        $scaais = Scaai::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(5);
        //$scaais = Scaai::orderBy('id', 'desc')->where()->paginate(5); WANHA

        return view('scaais.index')->withScaais($scaais);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scaais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        
        $this->validate($request, array(
            'title' =>'required|max:255',
            'body'  => 'required' 
            )); 
        
        // store in the database
        
        $scaai = new Scaai;
        
        $scaai->title = $request->title;
        $scaai->user_id = Auth::user()->id;
        $scaai->body = $request->body;
        
        $scaai->save();
        
        // redirect to another page
        
        Session::flash('success','Your SCAAI was successfully saved!');
        
        return redirect()->route('scaais.show', $scaai->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scaai = Scaai::find($id);
        $user = User::find($scaai->user_id);
        return view('scaais.show')->withScaai($scaai)->withUser($scaai);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scaai = Scaai::find($id);
        
        return view('scaais.edit')->withScaai($scaai);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $scaai = Scaai::find($id);
        
            $this->validate($request, array(
                'title' =>'required|max:256',
                'body'  => 'required'
            )); 
        
        
        //save
        $scaai = Scaai::find($id);
        $scaai->title = $request->input('title');
        $scaai->user_id = Auth::user()->id;
        $scaai->body = $request->input('body');
        
        $scaai->save();
        
        //set flash data with success message
        Session::flash('success','Your SCAAI was successfully saved!');
        
        //uudelleenohjaus flash-datan perusteella scaais.show-viewiin
        return redirect()->route('scaais.show', $scaai->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scaai = Scaai::find($id);
        
        $scaai->delete();
        
        Session::flash('success', 'Your SCAAI was successfully deleted!');
        
        return redirect()->route('scaais.index');
        
    }
}
