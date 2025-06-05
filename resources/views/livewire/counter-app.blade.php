<div>
    {{-- The Master doesn't talk, he acts. --}}
    <p>Nama : {{$nama}}</p>
    <h1>Counter : {{$count}}</h1>
    <p>Panggilan : {{$panggilan}}</p>
    <form wire:submit='$refresh' class="my-4">
        <input wire:model='panggilan' type="text" class="border-1 border-black rounded px-2 py-1">
        <button type="submit" class="bg-teal-500 text-white rounded px-2 py-1">Kirim</button>
    </form>
    <button class="px-4 py-2 shadow-2xl bg-blue-400 text-white cursor-pointer rounded" wire:click="increase(4)">
        Increment
    </button>
</div>
