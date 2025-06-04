<div>
    {{-- The Master doesn't talk, he acts. --}}
    <p>Nama : {{$nama}}</p>
    <h1>Counter : {{$count}}</h1>
    <button class="px-4 py-2 shadow-2xl bg-blue-400 text-white cursor-pointer rounded" wire:click="increase(4)">
        Increment
    </button>
</div>
