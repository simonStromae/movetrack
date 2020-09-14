<?php

namespace App\Http\Livewire\Nkd\Country;

use App\Country;
use Livewire\Component;

class CreateCountry extends Component
{
    public $name;
    public $slug;
    public $code;

    public function save(){

        $this->validate([
            'name'=>'required|min:3',
            'slug'=>'required|max:4',
            'code'=>'required|min:3',
        ]);

        $country = new Country();
        $country->name = $this->name;
        $country->slug = $this->slug;
        $country->code = $this->code;

        in_return(function() use ($country){
            $country->save();
            notify()->success('Enregistrement effectué avec success !');
        });

        return redirect()->route('backend.country.list');
    }

    public function render()
    {
        return view('livewire.nkd.country.create-country');
    }
}
