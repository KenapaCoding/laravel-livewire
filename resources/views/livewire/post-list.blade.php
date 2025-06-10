<div>
    {{-- Success is as dangerous as failure. --}}
    @foreach ($posts as $post)
        <livewire:post-item :post="$post" :key="$post->id"/>
        <button wire:click="delete({{ $post->id }})" class="mx-6 px-4 py-2 rounded text-white bg-red-500">
            Delete
        </button>
    @endforeach
</div>
