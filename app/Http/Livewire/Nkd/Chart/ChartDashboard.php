<?php

namespace App\Http\Livewire\Nkd\Chart;

use App\Category;
use App\Client;
use App\Service\Nkd\ChartServices;
use App\Track;
use Livewire\Component;

class ChartDashboard extends Component
{
    public $tracks;
    public $clients;
    public $categories;

    public $data_tracks;
    public $data_clients;
    public $data_categories;

    public function mount(){

        $this->data_tracks = Track::all();
        $this->data_categories = Category::all();
        $this->data_clients = Client::all();

        $this->pie_chart_track($this->data_tracks);
        $this->doughnut_client_quater($this->data_clients);
    }

    private function pie_chart_track($tracks){

        $_tracks = $tracks->filter()->all();
        $this->tracks = ChartServices::pieTrack($_tracks);

    }

    private function doughnut_client_quater($client){
        $_clients = $client->filter()->all();
        $this->clients = ChartServices::pieQuaterClient($_clients);
    }

    public function render()
    {
        return view('livewire.nkd.chart.chart-dashboard');
    }
}
