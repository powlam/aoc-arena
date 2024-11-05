<div class="flex-grow w-full sm:w-auto">
    <ul>
        @foreach(App\Models\Archetype::all() as $archetype)
            <li @class([
                    "flex items-center justify-between h-20 p-2 m-1 rounded-md",
                    $archetype->type->bgColor() => $selected === $archetype->id,
                    'hover:'.$archetype->type->bgColor() => $selected !== $archetype->id,
                ])
                wire:click="selectArchetype({{ $archetype->id }})"
            >
                <h2 class="text-lg tracking-widest">{{ $archetype->name }}</h2>
                <img src="{{ Vite::asset('resources/images/'.$archetype->imageName) }}" alt="{{ $archetype->name }} archetype's symbol" class="h-full">
            </li>
        @endforeach
    </ul>
</div>
