<?php

namespace App\Livewire;

use Livewire\Component;

class CounterApp extends Component
{
    public $count = 100;

    public function render()
    {
        return view('livewire.counter-app',[
            "nama" => "Ranggo pato"
        ]);
    }
}
