<?php

namespace App\Livewire\Guest\Programs;

use Livewire\Component;
use App\Models\Program;

class ProgramDetailsComponent extends Component
{
    public $program;


    public function mount($title,$id){
        $this->program = Program::find($id);
    }

    public function render()
    {
        $programs = Program::all();
        return view('livewire.guest.programs.program-details-component',compact('programs'))->layout('layouts.guest');
    }
}
