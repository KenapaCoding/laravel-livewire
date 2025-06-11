<div class="shadow-lg px-4 py-3 m-4">
    <h1 class="text-xl font-bold">{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <button wire:click="delete" class="mx-2 px-4 py-2 rounded text-white bg-red-500">
            Delete
    </button>
</div>
