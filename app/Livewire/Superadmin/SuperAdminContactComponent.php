<?php

namespace App\Livewire\Superadmin;

use App\Models\Contact;
use Livewire\Component;

class SuperAdminContactComponent extends Component
{
    public function render()
    {
        $contacts =Contact::paginate(10);
    ;
        return view('livewire.superadmin.super-admin-contact-component',compact('contacts'));
    }
}
