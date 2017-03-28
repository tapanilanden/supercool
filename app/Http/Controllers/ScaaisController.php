<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Scaai;
use Session;

class ScaaisController extends Controller
{
    public function index()
    {
        $scaais = Scaai::orderBy('id', 'desc')->paginate(5);

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
            'user_id' => 'required|integer|max:1000000',
            'body'  => 'required' 
            )); 
        
        // store in the database
        
        $scaai = new Scaai;
        
        $scaai->title = $request->title;
        $scaai->user_id = $request->user_id;
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
        return view('scaais.show')->withScaai($scaai);
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
                'user_id' => 'required|integer|max:1000000',
                'body'  => 'required'
            )); 
        
        
        //save
        $scaai = Scaai::find($id);
        $scaai->title = $request->input('title');
        $scaai->user_id = $request->input('user_id');
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
