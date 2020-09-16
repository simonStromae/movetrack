<?php

namespace App\Http\Controllers\Nkd\Backend;

use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\Quater;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function destroyCity($id){

        $city = City::findOrFail($id);
        if($city->quaters->count() > 0){
            notify()->error('Impossible de supprimer, car cette ville a plusieurs quartiers !');
            return redirect()->back();
        }

        $city->delete();

        notify()->success('Suppression effectué !');
        return redirect()->route('backend.city.list');

    }

    public function destroyCountry($id){

        $c = Country::findOrFail($id);

        if($c->cities->count() > 0){
            notify()->error('Impossible de supprimer, car ce pays a plusieurs villes !');
            return redirect()->back();
        }
        $c->delete();

        notify()->success('Suppression effectué !');
        return redirect()->route('backend.country.list');
    }

    public function destroyQuater($id){
        $q = Quater::findOrFail($id);
        $q->delete();

        notify()->success('Suppression effectué !');
        return redirect()->route('backend.quater.list');

    }
}
