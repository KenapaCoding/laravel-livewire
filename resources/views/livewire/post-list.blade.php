<div>
    {{-- Success is as dangerous as failure. --}}
    @foreach ($posts as $post)
        <livewire:post-item :post="$post" :key="$post['id']"/>
    @endforeach
</div>
