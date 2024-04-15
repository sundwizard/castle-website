<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use App\Models\Contact;

class ContactComponent extends Component
{

    public $name;
    public $email;
    public $phone;
    public $comment;


    //method to create messages
    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'comment' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message', 'Thanks, Your message has been sent successfully!');

        //to reset all inputed fields
        $this->reset();
    }//end function sendMessages
    public function render()
    {
        return view('livewire.guest.contact-component')->layout('layouts.guest');
    }
}
