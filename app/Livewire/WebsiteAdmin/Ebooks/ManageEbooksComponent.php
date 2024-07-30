<?php

namespace App\Livewire\WebsiteAdmin\Ebooks;

use Livewire\Component;
use App\Models\eBook;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ManageEbooksComponent extends Component
{
    protected $listeners = ['delete-confirmed'=>'deleteBook'];//listen to emited action

    public $paginate;
    public $actionId;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public $sn;
    public $selBook;

    use WithPagination;


    public function mount(){
        $this->paginate = 10;
    }
       //get record of blogs
       public function getBooks(){
        $growths = eBook::query()
            ->where(function($query) {
            if($this->searchTerm) {
                $query->where('book_title', 'like', '%'.$this->searchTerm.'%' )
                ->orWhere('description', 'like', '%'.$this->searchTerm.'%' );
            }
        })

        ->latest()->paginate($this->paginate);
        return $growths;
    }

    public function clearSearch(){
        $this->searchTerm = "";
    }

    public function setBlog(Grow $book){
        $this->title = $book->title;
        $this->description = $book->description;
        $this->selBook = $book;
    }
    //delete Service
    public function deleteBook(){
        $eBook= eBook::find($this->actionId);
        if($eBook){
            unlink('assets/images/ebooks/'.$eBook->cover);
        }
        $eBook->delete();
        $this->dispatch('feedback',feedback:'Ebook Successfully Deleted');
    }

    //set action id
    public function setActionId($actionId){
        $this->actionId = $actionId;
    }

    public function setBook(eBook $ebook){
        $this->selBook = $ebook;
    }


    public function render()
    {
        $books = $this->getBooks();
        return view('livewire.website-admin.ebooks.manage-ebooks-component',compact('books'))->layout('livewire.website-admin.layouts.app');
    }
}
