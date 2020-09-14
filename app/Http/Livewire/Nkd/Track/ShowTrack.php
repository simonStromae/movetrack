<?php

namespace App\Http\Livewire\Nkd\Track;

use App\Service\Nkd\TrackService;
use App\Track;
use Livewire\Component;

class ShowTrack extends Component
{
    public $track;
    public $delivery_date;
    public $delivery_price;
    public $real_price;

    public function mount($id){

        $this->track = Track::find($id);

        $this->delivery_date = $this->track->delivery_date;
        $this->delivery_price = $this->track->delivery_price;
        $this->real_price = $this->track->real_price;

    }

    public function save(){
        $this->validate([
            'delivery_date' => 'required',
            'real_price' => 'required|int',
            'delivery_price' => 'required|int',
        ]);

        $this->track->delivery_date = $this->delivery_date ;
        $this->track->delivery_price = $this->delivery_price  ;
        $this->track->real_price = $this->real_price ;
        in_return(function(){
            $this->track->update();
            notify()->success('Enregistrement effectué avec succès !');
        });

        return redirect()->back();

    }
    public function render()
    {
        return view('livewire.nkd.track.show-track');
    }
}
