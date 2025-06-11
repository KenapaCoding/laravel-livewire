<?php

namespace App\Livewire;

use Livewire\Component;

class PostItem extends Component
{

    public $post;

    public function mount($post){
        $this->post = $post;
    }

    public function delete(){
        $this->dispatch('deleted',id:$this->post->id);
    }

    public function render()
    {
        return view('livewire.post-item');
    }
}
