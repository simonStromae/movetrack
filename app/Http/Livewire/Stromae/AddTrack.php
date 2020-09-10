<?php

namespace App\Http\Livewire\Stromae;

use App\Category;
use App\Track;
use Livewire\Component;

class AddTrack extends Component
{
    public $id_track;
    public $designation;
    public $marque;
    public $categorie;
    public $budget;
    public $description;
    public $image;

    public function mount($track = null){
        if (!is_null($track)){
            $this->designation = $track->designation;
            $this->marque = $track->brand;
            $this->budget = $track->budget;
            $this->description = $track->description;
            $this->categorie = $track->category_id;
            $this->id_track = $track->id;
        }

    }

    public function save(){
        $this->validate([
            'designation' => 'required|string',
            'marque' => 'required|string',
            'categorie' => 'required|numeric',
            'budget' => 'required|numeric',
            'description' => 'required|string',
        ]);

        if (is_null($this->id_track)){
            $track = new Track();
        }else{
            $track = Track::find($this->id_track);
        }

        $track->designation = $this->designation;
        $track->brand = $this->marque;
        $track->budget = $this->budget;
        $track->description = $this->description;
        $track->category_id = $this->categorie;


        $track->save();

        smilify('success', 'Votre besoin a été pris en compte');

        return redirect()->route('checkout', $track->id);
    }

    public function render()
    {
        return view('livewire.stromae.add-track', ['categories' => Category::all()]);
    }
}
