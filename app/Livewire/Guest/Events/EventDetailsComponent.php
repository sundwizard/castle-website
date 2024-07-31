<?php

namespace App\Livewire\Guest\Events;

use Livewire\Component;
use App\Models\Event;
use Illuminate\Support\Facades\Session;
use App\Models\NewsletterSubscriber;
use App\Models\EventRegistration;

class EventDetailsComponent extends Component
{


    public $event;
    public $name;
    public $email;
    public $phoneno;
    public $comment;
    public $type_of_event;

    public function mount($id){
        $this->event = Event::find($id);

    }

    public function registerEvent(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phoneno' => 'required',
            'type_of_event' => 'required|string'
        ]);

        $valApp = EventRegistration::where(['email'=>$this->email,'event_id'=>$this->event->id])->first();
        $valAppPhone = EventRegistration::where(['phoneno'=>$this->phoneno,'event_id'=>$this->event->id])->first();

        if($valApp!==null || $valAppPhone!=null){
            Session::flash('errorfeedback', "Sorry you have already registered for this event");
        }else{
            $event = EventRegistration::create([
                'name' => $this->name,
                'email' => $this->email,
                'phoneno' => $this->phoneno,
                'event_id' => $this->event->id,
                'type' => $this->type_of_event,

            ]);

            $checkEmail = NewsletterSubscriber::where('email',$this->email)->first();
            $event_details  = Event::find($this->event->id);
            if($checkEmail==null){
                NewsletterSubscriber::create([
                    'email' => $this->email
                ]);
            }

            $this->reset(['name','email','phoneno']);
            Session::flash('feedback', "Event Registration Successful");
        }
    }

    public function render()
    {
        return view('livewire.guest.events.event-details-component')->layout('layouts.guest');
    }
}
