<?php

namespace App\Http\Livewire\Stromae\Account;

use App\City;
use Livewire\Component;

class Localisation extends Component
{
    public $pays, $ville, $quartier;

    public $repere, $repere_particulier;
    public $countries, $cities = [];

    public function mount(){
        $client = user()->client;

        $this->pays = $client->city->country->id;
        $this->ville = $client->city->id;
        $this->quartier = $client->quater_name;
        $this->repere = $client->landmark;
        $this->repere_particulier = $client->particular_landmark;

        $this->cities = City::where('country_id', $this->pays)->get();
    }

    public function save_position(){
        $this->validate([
            'quartier' => 'required|string'
        ]);

        $client = user()->client;
        $client->quater_name = $this->quartier;
        $client->city_id = $this->ville;
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
