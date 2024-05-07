<?php

namespace App\Livewire\Guest\Programs;

use Livewire\Component;
use App\Models\Program;

class ProgramsComponent extends Component
{
    public function render()
    {
        $programs = Program::all();
        return view('livewire.guest.programs.programs-component',compact('programs'))->layout('layouts.guest');
    }
}
