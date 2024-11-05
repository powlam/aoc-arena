<div x-data x-show="$wire.show" class="flex flex-col items-center justify-start w-full sm:flex-row h-1/2 sm:w-1/2">
    <button class="mt-4 opacity-25 clear-end hover:opacity-100" wire:click="close">
        <x-icons.chevron-double-left class="hidden sm:block" />
        <x-icons.chevron-double-up class="block sm:hidden" />
    </button>
    <ul class="flex-grow w-full">
        @foreach($archetypeClasses as $archetypeClass)
            <li class="flex items-center justify-between h-20 p-2 m-1 rounded-md {{ $archetypeClass->mainArchetype->type->bgColor() }}">
                <h2 class="w-3/4 text-lg tracking-widest">{{ $archetypeClass->name }}</h2>
                <div class="relative w-20 h-full">
                    <img src="{{ Vite::asset('resources/images/'.$archetypeClass->mainArchetype->imageName) }}" alt="Main archetype's symbol" class="absolute h-full end-0">
                    <img src="{{ Vite::asset('resources/images/'.$archetypeClass->secondaryArchetype->imageName) }}" alt="Secondary archetype's symbol" class="absolute h-1/2 end-0">
                </div>
            </li>
        @endforeach
    </ul>
</div>
