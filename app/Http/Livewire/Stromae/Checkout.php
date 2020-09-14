<?php

namespace App\Http\Livewire\Stromae;

use App\City;
use App\Client;
use App\Country;
use App\Quater;
use App\Track;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Checkout extends Component
{
    public $track_id;
    public $name, $email, $tel, $repere, $repere_particulier;
    public $register = true;

    public $pays, $ville, $quartier;

    public $countries, $cities = [], $quaters = [];

    public function mount($id_track){
        $this->track_id = $id_track;
        $this->countries = Country::all();

        if (check()){
            $user = user();
            $this->name = $user->name;
            $this->email = $user->client->email;
            $this->tel = $user->client->phone_number;
            $this->pays = $user->client->quater->city->country->id;
            $this->ville = $user->client->quater->city->id;
            $this->quartier = $user->client->quater->id;
            $this->repere = $user->client->landmark;
            $this->repere_particulier = $user->client->particular_landmark;

            $this->cities = City::where('country_id', $this->pays)->get();
            $this->quaters = Quater::where('city_id', $this->ville)->get();
        }
    }

    public function updatedPays($id_country){
        $this->cities = City::where('country_id', $id_country)->get();
        $this->quaters = [];
    }

    public function updatedVille($id_city){
        $this->quaters = Quater::where('city_id', $id_city)->get();
    }

    public function save(){

        //verification
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'tel' => 'required|string',
            'pays' => 'required|numeric',
            'ville' => 'required|numeric',
            'quartier' => 'required|numeric',
            'repere' => 'required|string'
        ]);

        //recuperation information client
        if(check()){
            $user = user();
            $user->name = $this->name;
            $user->save();

            $client = $user->client;
            $this->addValuesClient($client);

        }elseif($this->register){

            if (emailExist($this->email)){
                smilify('error', 'l\'email utilisé existe déjà. Veuillez réessayez avec un autre ou connectez-vous');
                return redirect()->route('checkout', $this->track_id);
            }

            $client = new Client();
            $this->addValuesClient($client);

            $user = User::create([
                "name" => $this->name,
                "username" => $this->email,
                "password" => Hash::make('12345678'),
                "client_id" => $client->id
            ]);
            Auth::guard()->login($user);
        }

        //attribution d'un client au track
        $track = Track::find($this->track_id);
        $track->client_id = $client->id;
        $track->save();

        smilify('success', 'Information de livraison enregistrer');

        return redirect()->route('recap', $this->track_id);
    }

    private function addValuesClient($client){
        $client->email = $this->email;
        $client->phone_number = $this->tel;
        $client->quater_id = $this->quartier;
        $client->landmark = $this->repere;
        $client->particular_landmark = $this->repere_particulier;
        $client->save();
    }

    public function render()
    {
        return view('livewire.stromae.checkout');
    }
}
