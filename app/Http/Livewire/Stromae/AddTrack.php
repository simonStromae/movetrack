<?php

namespace App\Http\Livewire\Stromae;

use App\Category;
use App\Image;
use App\Track;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddTrack extends Component
{
    use WithFileUploads;

    public $id_track;
    public $designation;
    public $marque;
    public $categorie;
    public $budget;
    public $description;
    public $images = [];

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
            'images.*' => 'image|mimes:jpg,jpeg,png'
        ]);

        if (is_null($this->id_track)){
            $track = new Track();
//            $this->id_track = $track->id;
        }else{
            $track = Track::find($this->id_track);

            Image::where('track_id', $track->id)->delete();
        }

        $track->reference = uniqid("$this->categorie.");
        $track->designation = $this->designation;
        $track->brand = $this->marque;
        $track->budget = $this->budget;
        $track->description = $this->description;
        $track->category_id = $this->categorie;

        $track->save();
        $this->addImageToDatabase($track->id);


        smilify('success', 'Votre besoin a été pris en compte');

        return redirect()->route('checkout', $track->id);
    }

    private function addImageToDatabase($id_track){
        foreach ($this->images as $image) {
            $img = $image;
            $currentDate = Carbon::now()->toDateString();
            $imagename =  'track-'. $currentDate .'-'. uniqid() .'.'. $img->getClientOriginalExtension();
            $image->storeAs('public/images/tracks', $imagename);

            $images_track = new Image();
            $images_track->name = $imagename;
            $images_track->track_id = $id_track;
            $images_track->save();
        }
        return true;
    }

    public function render()
    {
        return view('livewire.stromae.add-track', ['categories' => Category::all()]);
    }
}
