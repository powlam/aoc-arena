<?php

namespace App\Livewire;

use App\Models\Archetype;
use Livewire\Component;

class ArchetypeClasses extends Component
{
    public $show = false;

    public $archetypeId;

    public $archetypeClasses = [];

    public $listeners = ['show-archetype-classes' => 'showArchetypeClasses'];

    public function render()
    {
        return view('livewire.archetype-classes');
    }

    public function showArchetypeClasses(Archetype $archetype)
    {
        $this->archetypeClasses = $archetype->classes;
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
        $this->dispatch('hide-archetype-classes');
    }
}
