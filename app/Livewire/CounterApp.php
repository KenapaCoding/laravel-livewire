<?php

namespace App\Livewire;

use Livewire\Component;

class CounterApp extends Component
{
    public $count = 101;

    public $panggilan = 'Boy';

    public function increase($num) {
        $this->count = $this->count + $num;
    }

    public function render()
    {
        return view('livewire.counter-app',[
            "nama" => "Ranggo pato"
        ]);
    }
}
