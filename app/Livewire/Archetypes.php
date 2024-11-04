<?php

namespace App\Livewire;

use App\Models\Archetype;
use Livewire\Component;

class Archetypes extends Component
{
    public $selected = null;

    public $listeners = ['hide-archetype-classes' => 'hideArchetypeClasses'];

    public function render()
    {
        return view('livewire.archetypes');
    }

    public function selectArchetype(Archetype $archetype)
    {
        $this->dispatch('show-archetype-classes', archetype: $archetype->id);
        $this->selected = $archetype->id;
    }

    public function hideArchetypeClasses()
    {
        $this->selected = null;
    }
}
