<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostList extends Component
{
    // public $posts;
//    #[On('deleted')]
    public function delete($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        // $this->posts = Post::all();
    }

    // public function mount() {
    //     $this->posts = Post::all();
    // }

    public function render()
    {
        return view('livewire.post-list', [
            "posts" => Post::all()
        ]);
    }
}
