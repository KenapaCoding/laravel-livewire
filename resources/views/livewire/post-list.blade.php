<div>
    {{-- Success is as dangerous as failure. --}}
    @foreach ($posts as $post)
        <livewire:post-item @deleted="delete($event.detail.id)" :post="$post" :key="$post->id"/>

    @endforeach
</div>
