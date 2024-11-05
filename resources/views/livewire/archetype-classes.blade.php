<div x-data x-show="$wire.show" class="flex flex-col items-center justify-start w-full sm:flex-row h-1/2 sm:w-1/2">
    <button class="mt-4 opacity-25 clear-end hover:opacity-100" wire:click="close">
        <x-icons.chevron-double-left class="hidden sm:block" />
        <x-icons.chevron-double-up class="block sm:hidden" />
    </button>
    <ul class="flex-grow w-full">
        @foreach($archetypeClasses as $archetypeClass)
            <li class="flex items-center justify-between h-20 p-2 rounded-md {{ $archetypeClass->mainArchetype->type->bgColor() }}">
                <h2 class="w-3/4 text-lg tracking-widest">{{ $archetypeClass->name }}</h2>
                <div class="relative w-20 aspect-square">
                    <img src="{{ Vite::asset('resources/images/'.$archetypeClass->mainArchetype->imageName) }}" alt="Main archetype's symbol" class="absolute top-0 left-0 w-full">
                    <img src="{{ Vite::asset('resources/images/'.$archetypeClass->secondaryArchetype->imageName) }}" alt="Secondary archetype's symbol" class="absolute w-1/2 left-1/4 bottom-1/4">
                </div>
            </li>
        @endforeach
    </ul>
</div>
