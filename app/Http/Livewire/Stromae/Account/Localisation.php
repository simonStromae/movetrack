<?php

namespace App\Http\Livewire\Stromae\Account;

use App\City;
use App\Quater;
use Livewire\Component;

class Localisation extends Component
{
    public $pays, $ville, $quartier;

    public $repere, $repere_particulier;
    public $countries, $cities = [], $quaters = [];

    public function mount(){
        $client = user()->client;

        $this->pays = $client->quater->city->country->id;
        $this->ville = $client->quater->city->id;
        $this->quartier = $client->quater->id;
        $this->repere = $client->landmark;
        $this->repere_particulier = $client->particular_landmark;

        $this->cities = City::where('country_id', $this->pays)->get();
        $this->quaters = Quater::where('city_id', $this->ville)->get();
    }

    public function updatedVille($id_city){
        $this->quaters = Quater::where('city_id', $id_city)->get();
    }

    public function save_position(){
        $this->validate([
            'quartier' => 'required|numeric'
        ]);

        $client = user()->client;
        $client->quater_id = $this->quartier;
        $client->save();

        notify()->success('Votre localisation a bien été mise a jour');

        return redirect()->route('my-account');
    }

    public function save_landmark(){
        $this->validate([
            'reper_particulier' => 'required|string',
            'repere' => 'required|string'
        ]);

        $client = user()->client;
        $client->landmark = $this->repere;
        $client->particular_landmark = $this->repere_particulier;
        $client->save();

        notify()->success('Votre localisation a bien été mise a jour');

        return redirect()->route('my-account');
    }

    public function render()
    {
        return view('livewire.stromae.account.localisation');
    }
}
