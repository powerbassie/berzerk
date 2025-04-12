<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

class EventOverview extends Component
{
    public $events;

    public function mount()
    {
        $this->events = Event::all();
    }

    public function render()
    {
        return view('livewire.event-overview');
    }
}
