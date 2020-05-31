<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;
use Illuminate\View\View;

class Covidwidget extends Component
{
    public $test = 'This is a test';
    public $nation = '';
    public $report = '';
    public $countries = [];
    public $slug = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nation='sri-lanka')        //By default set the nation as Nepal
    {
        $this->nation = $nation;
        $api = 'https://covid19-server.chrismichael.now.sh/api/v1/ReportsByCountries/'.$nation;
        $response = Http::get($api);
        $this->report = $response->json()['report'];
        $this->getCountry();
       // dd($this->slug);
        //dd($response->json());
    }

    public function getCountry(){
        $api = 'https://api.covid19api.com/countries';
        $response = Http::get($api);
        $this->countries = $response->json();
        foreach ($this->countries as $key => $value) {
            $this->slug[] = $value['Country'];
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.covidwidget');
    }
}
