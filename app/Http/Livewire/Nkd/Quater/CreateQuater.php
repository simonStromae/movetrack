<?php

namespace App\Http\Livewire\Nkd\Quater;

use App\City;
use App\Quater;
use Livewire\Component;

class CreateQuater extends Component
{
    public $name;
    public $slug;
    public $cities;

    public $city_id;

    public function mount(){
        $this->cities = City::all();
    }

    public function save(){
        $this->validate([
            'name'=>'required|min:3',
            'slug'=>'required|max:4|min:3',
            'city_id'=>'required',
        ]);

        $quater= new Quater();
        $quater->name = $this->name;
        $quater->slug = $this->slug;
        $quater->city_id = $this->city_id;

        in_return(function() use ($quater){
            $quater->save();
            notify()->success('Enregistrement effectué avec success !');
        });

        return redirect()->route('backend.quater.list');
    }

    public function render()
    {
        return view('livewire.nkd.quater.create-quater');
    }
}
