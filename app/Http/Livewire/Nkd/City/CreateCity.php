<?php

namespace App\Http\Livewire\Nkd\City;

use App\City;
use App\Country;
use Livewire\Component;

class CreateCity extends Component
{

    public $name;
    public $slug;
    public $countries;
    public $country_id;

    public function mount(){
        $this->countries = Country::all();
    }

    public function save(){
        $this->validate([
            'name'=>'required|min:3',
            'slug'=>'required|max:4|min:3',
            'country_id'=>'required',
        ]);

        $country = new City();
        $country->name = $this->name;
        $country->slug = $this->slug;
        $country->country_id = $this->country_id;

        in_return(function() use ($country){
            $country->save();
            notify()->success('Enregistrement effectué avec success !');
        });

        return redirect()->route('backend.city.list');
    }

    public function render()
    {
        return view('livewire.nkd.city.create-city');
    }
}
