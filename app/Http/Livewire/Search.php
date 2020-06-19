<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $suggestions = [];

    public function search($search)
    {
        $response = Http::get('http://localhost:4000/v1/autocomplete?text='.$search.'&size=8&lang=fr&country=bel');

        $this->suggestions = json_encode($response->json());
    }

    public function render()
    {
        return view('livewire.search');
    }
}
