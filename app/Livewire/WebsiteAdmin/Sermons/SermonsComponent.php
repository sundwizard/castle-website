<?php

namespace App\Livewire\WebsiteAdmin\Sermons;

use Livewire\Component;
use App\Models\Sermon;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
class SermonsComponent extends Component
{
    protected $listeners = ['delete-confirmed'=>'deleteSermon'];//listen to emited action

    public $paginate;
    public $actionId;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public $sn;
    public $sermon;
    public $serlSermon;

    public $title;
    public $description;
    public $photo;
    public $minister;
    public $youtube;
    public $telegram;

    use WithPagination;


    public function mount(){
        $this->paginate = 10;
    }
       //get record of blogs
       public function getSermons(){
        $sermons = Sermon::query()
            ->where(function($query) {
            if($this->searchTerm) {
                $query->where('title', 'like', '%'.$this->searchTerm.'%' )
                ->orWhere('description', 'like', '%'.$this->searchTerm.'%' );
            }
        })

        ->latest()->paginate($this->paginate);
        return $sermons;
    }

    public function clearSearch(){
        $this->searchTerm = "";
    }

    public function setSermon(Sermon $sermon){
        $this->title = $sermon->title;
        $this->description = $sermon->description;
        $this->youtube = $sermon->youtube;
        $this->telegram = $sermon->telegram;
        $this->minister = $sermon->minister;
        $this->selSermon = $sermon;
    }
    //delete Service
    public function deleteSermon(){
        $sermon= Sermon::find($this->actionId);
        if($sermon){
            unlink('assets/images/sermons/'.$sermon->image);
        }
        $sermon->delete();
        $this->dispatch('feedback',feedback:'Sermon Successfully Deleted');
    }

    //set action id
    public function setActionId($actionId){
        $this->actionId = $actionId;
    }

    public function setService(Sermon $sermon){
        $this->sermon = $sermon;
    }


    public function render()
    {
        $sermons = $this->getSermons();
        return view('livewire.website-admin.sermons.sermons-component',compact('sermons'))->layout('livewire.website-admin.layouts.app');
    }
}
