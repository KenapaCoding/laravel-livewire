<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Button extends Component
{

    public function increase($num){
       $this->dispatch('incremented', $num);
    }

    public function render()
    {
        return view('livewire.components.button');
    }
}
