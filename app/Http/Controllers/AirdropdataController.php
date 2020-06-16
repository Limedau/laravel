<?php

namespace App\Http\Controllers;

use App\Airdropdata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AirdropdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    		$data = Airdropdata::all();
    	
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $airdropdata = new Airdropdata; 
       $airdropdata->a_name = $request->a_name;
       $airdropdata->slug = Str::slug($airdropdata->a_name);
       $airdropdata->est_value = $request->est_value;
       $airdropdata->free_coin = $request->free_coin;
       $airdropdata->a_end = $request->a_end;
       $airdropdata->a_url = $request->a_url;
       $airdropdata->poll = $request->poll;
       $airdropdata->img_url = $request->img_url;
       $airdropdata->tg = $request->tg;
       $airdropdata->tw = $request->tw;
       $airdropdata->li = $request->li;
       $airdropdata->mdm = $request->mdm;
       $airdropdata->yu = $request->yu;
       $airdropdata->fb = $request->fb;
       $airdropdata->kyc = $request->kyc;
       $airdropdata->email = $request->email;
       $airdropdata->phone = $request->phone;
       $airdropdata->pin = $request->pin;
       $airdropdata->r = $request->r;
       $airdropdata->s1 = $request->s1;
       $airdropdata->s2 = $request->s2;
       $airdropdata->s3 = $request->s3;
       $airdropdata->s4 = $request->s4;
       $airdropdata->s5 = $request->s5;
       $airdropdata->ai = $request->ai;
       
       $airdropdata->save();
       
       return back();
    	
    	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Airdropdata  $airdropdata
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $airdrop = Airdropdata::where('slug', '=', $slug)->first();
        
        return view('airdrop', compact('airdrop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airdropdata  $airdropdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Airdropdata $airdropdata)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airdropdata  $airdropdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airdropdata )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Airdropdata  $airdropdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airdropdata $airdropdata)
    {
        //
    }
}