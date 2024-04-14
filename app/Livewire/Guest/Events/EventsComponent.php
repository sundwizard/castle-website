<?php

namespace App\Livewire\Guest\Events;

use Livewire\Component;
use App\Models\Event;
use Livewire\WithPagination;
class EventsComponent extends Component
{
    public $paginate;
    public $actionId;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public $searchBar = false;

    public function mount(){
        $this->paginate = 10;
    }


    //get events
    public function getEvents(){
        $events = Event::query()
            ->where(function($query) {
            if($this->searchTerm) {
                $query->where('event_title', 'like', '%'.$this->searchTerm.'%' )
                ->orWhere('description', 'like', '%'.$this->searchTerm.'%' );
            }
        })

        ->latest()->paginate($this->paginate);

        //initialize search bar
        if(count($events)>0){
            $this->searchBar = true;
        }
        return $events;
    }

    public function clearSearch(){
        $this->searchTerm = "";
    }

    public function render()
    {
        $events = $this->getEvents();
        $nextEvent = Event::orderBy('event_date','Asc')->first();
        return view('livewire.guest.events.events-component',compact('events','nextEvent'))->layout('layouts.guest');
    }
}
