<?php

namespace App\Http\Livewire\Nkd\Track;

use App\Category;
use App\Service\Nkd\TrackService;
use App\Track;
use App\Client;
use Livewire\Component;

class CreateTrack extends Component
{
    public $categories;
    public $client;

    public $reference;
    public $designation;
    public $brand;
    public $budget;
    public $description;
    public $category_id;
    public $client_id;

    public function mount($id_client){

        $this->client_id = $id_client;
        $this->categories = Category::all();
        $this->client = Client::find($id_client);


    }

    public function save(){
        $data = $this->validate(TrackService::validate());

        $t = new Track();
        $t->reference = uniqid("$this->category_id.");;
        $t->designation = $this->designation;
        $t->created_date = date('Y-m-d h:i:s');
        $t->brand = $this->brand;
        $t->status = 'emit';
        $t->budget = $this->budget;
        $t->description = $this->description;
        $t->category_id = $this->category_id;
        $t->client_id = $this->client_id;

        in_return( function() use ($t){
            $t->save();
            notify()->success('Enregistrement éffectué avec succès');
        });

        return redirect()->route('backend.track.list');

    }

    public function render()
    {
        return view('livewire.nkd.track.create-track');
    }
}
