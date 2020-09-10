<?php

namespace App\Http\Controllers\Stromae;

use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\Quater;
use App\Track;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function addTrack(){
        return view('pages.stromae.track-page.add-track');
    }

    public function editTrack($id){
        $track = Track::findOrFail($id);
        return view('pages.stromae.track-page.edit-track', compact('track'));
    }

    public function checkout($id){
        $track = Track::findOrFail($id);
        return view('pages.stromae.track-page.checkout', compact('track'));
    }

    public function summary($id){
        $track = Track::findOrFail($id);
        return view('pages.stromae.track-page.summary', compact('track'));
    }

    public function finish($id){
        $track = Track::findOrFail($id);
        if (is_null($track->status) && is_null($track->created_date)){
            $track->status = "emit";
            $track->created_date = now();
            $track->save();
        }

        smilify('success', 'L\'enregistrement de votre besoin a été un succès');

        return view('pages.stromae.track-page.finish');
    }
}
