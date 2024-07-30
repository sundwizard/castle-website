<?php

namespace App\Livewire\WebsiteAdmin\Grow;

use Livewire\Component;
use App\Models\Grow;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
class GrowthsComponent extends Component
{
    protected $listeners = ['delete-confirmed'=>'deleteGrowth'];//listen to emited action

    public $paginate;
    public $actionId;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public $sn;
    public $grow;
    public $selGrowth;

    use WithPagination;


    public function mount(){
        $this->paginate = 10;
    }
       //get record of blogs
       public function getGrowth(){
        $growths = Grow::query()
            ->where(function($query) {
            if($this->searchTerm) {
                $query->where('title', 'like', '%'.$this->searchTerm.'%' )
                ->orWhere('description', 'like', '%'.$this->searchTerm.'%' );
            }
        })

        ->latest()->paginate($this->paginate);
        return $growths;
    }

    public function clearSearch(){
        $this->searchTerm = "";
    }

    public function setBlog(Grow $grow){
        $this->title = $blog->title;
        $this->description = $blog->description;
        $this->selGrowth = $grow;
    }
    //delete Service
    public function deleteGrowth(){
        $grow= Grow::find($this->actionId);
        if($grow){
            unlink('assets/images/grow/'.$grow->image);
        }
        $grow->delete();
        $this->dispatch('feedback',feedback:'Post Successfully Deleted');
    }

    //set action id
    public function setActionId($actionId){
        $this->actionId = $actionId;
    }

    public function setGrowth(Grow $grow){
        $this->selGrowth = $grow;
    }


    public function render()
    {
        $growths = $this->getGrowth();
        return view('livewire.website-admin.grow.growths-component',compact('growths'))->layout('livewire.website-admin.layouts.app');
    }
}
