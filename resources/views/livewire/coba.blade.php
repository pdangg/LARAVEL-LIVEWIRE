<div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1 class="text-2xl text-center">{{ $count }}</h1>
    <button wire:click="tambah" class="bg-black text-white px-4 py-2 rounded-lg items-center">+</button>
    <button wire:click="kurang" class="bg-black text-white px-4 py-2 rounded-lg items-center">-</button>
</div>
