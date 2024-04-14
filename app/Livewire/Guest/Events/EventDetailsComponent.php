<?php

namespace App\Livewire\Guest\Events;

use Livewire\Component;
use App\Models\Event;

class EventDetailsComponent extends Component
{


    public $event;

    public function mount($title,$id){
        $this->event = Event::find($id);

    }

    public function render()
    {
        return view('livewire.guest.events.event-details-component')->layout('layouts.guest');
    }
}
