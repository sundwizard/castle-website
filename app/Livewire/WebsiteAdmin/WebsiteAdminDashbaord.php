<?php

namespace App\Livewire\WebsiteAdmin;

use Livewire\Component;
use App\Models\Service;
use App\Models\Event;
class WebsiteAdminDashbaord extends Component
{
    public function render()
    {
        $events = Event::count();
        $services = Service::count();
        return view('livewire.website-admin.website-admin-dashbaord',compact('events','services'))->layout('livewire.website-admin.layouts.app');
    }
}
