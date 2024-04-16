<?php

namespace App\Livewire\Superadmin\Events;

use Livewire\Component;
use App\Models\Event;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ViewEventComponent extends Component
{
    protected $listeners = ['delete-confirmed'=>'deleteEvent'];//listen to emited action

    public $paginate;
    public $actionId;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public $sn;
    public $event;
    public $selEvent;

    use WithPagination;


    public function mount(){
        $this->paginate = 10;
    }
       //get record of blogs
       public function getEvents(){
        $events = Event::query()
            ->where(function($query) {
            if($this->searchTerm) {
                $query->where('event_title', 'like', '%'.$this->searchTerm.'%' )
                ->orWhere('description', 'like', '%'.$this->searchTerm.'%' );
            }
        })

        ->latest()->paginate($this->paginate);
        return $events;
    }

    public function clearSearch(){
        $this->searchTerm = "";
    }

    public function setEvent(Event $event){
        $this->event = $event->title;
        $this->description = $event->description;
        $this->selEvent = $event;
    }

    //delete Service
    public function deleteEvent(){
        $event= Event::find($this->actionId);
        if($event){
            Storage::disk('do')->delete(storePhoto().$event->image);
            Storage::disk('do')->delete(storePhoto().$event->thumbnail);
        }
        $event->delete();
        $this->dispatch('feedback',feedback:'Event Successfully Deleted');
    }

    //set action id
    public function setActionId($actionId){
        $this->actionId = $actionId;
    }

    public function render()
    {
        $events = $this->getEvents();
        return view('livewire.superadmin.events.view-event-component',compact('events'));
    }
}
