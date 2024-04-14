<?php

namespace App\Livewire\Guest\Service;

use Livewire\Component;
use App\Models\Service;

class ServicesComponent extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.guest.service.services-component',compact('services'))->layout('layouts.guest');
    }
}
