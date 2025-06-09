<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class CounterApp extends Component
{
    public $count = 101;

    public $panggilan = 'Boy';

    public function increase($num) {
        $this->count = $this->count + $num;
    }

    // #[Layout('components.layouts.second')]
    #[Title('Counter page')]
    public function render()
    {
        return view('livewire.counter-app',[
            "nama" => "Ranggo pato"
        ]);
    }
}
