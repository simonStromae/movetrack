<?php

namespace App\Http\Controllers\Nkd\Backend;

use App\Http\Controllers\Controller;
use App\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index()
    {

//        if(auth()->user()->hasRole('Chef_unite')){
//            $tracks = Order::where('date_order', date('Y-m-d'))->get();
//        }else
        $tracks = Track::all();
        return view('pages.nkd.index',compact('tracks'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return
     */
    public function destroy($id)
    {
        Track::whereId($id)->delete();
        return redirect()->route('backend.track.list');
    }
}
