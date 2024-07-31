<?php

namespace App\Livewire\WebsiteAdmin\Ebooks;

use Livewire\Component;
use App\Models\EbookRequest;
use Livewire\WithPagination;
class EbookRequestsComponent extends Component
{
    protected $listeners = ['delete-confirmed'=>'deleteService'];//listen to emited action

    public $paginate;
    public $actionId;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public $sn;
    public $service;

    use WithPagination;


    public function mount(){
        $this->paginate = 10;
    }
       //get record of services
       public function getRequests(){
        $requests = EbookRequest::query()
            ->where(function($query) {
            if($this->searchTerm) {
                $query->where('name', 'like', '%'.$this->searchTerm.'%' )
                ->orWhere('phoneno', 'like', '%'.$this->searchTerm.'%' );
            }
        })

        ->latest()->paginate($this->paginate);
        return $requests;
    }

    public function clearSearch(){
        $this->searchTerm = "";
    }

    public function render()
    {
        $requests = $this->getRequests();
        return view('livewire.website-admin.ebooks.ebook-requests-component',compact('requests'))->layout('livewire.website-admin.layouts.app');
    }
}
