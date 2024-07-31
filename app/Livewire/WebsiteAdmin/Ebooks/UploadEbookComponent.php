<?php

namespace App\Livewire\WebsiteAdmin\Ebooks;

use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\eBook;
use Illuminate\Support\Facades\Storage;
use Image;
class UploadEbookComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $category;
    public $photo;
    public $author;

    public $message = [
        'title.required' => "Please enter ebook title",
        'description.required' => "Please enter ebook description",
        'eventtype.required' => "Please select type of ebook",
        'price.required' => "Please enter ebook price",
        'photo.required' => "Please select Ebook image",
        'photo.max' => "Ebook Image cannot be more than 1000Kbs",
    ];

    public function updated($field){
        $this->validateOnly($field,[
            'title' => ['required','string','max:200'],
            'description' => ['required','string','max:16000000'],
            'category' => ['required','string','max:200'],
            'author' => ['required','string'],
            'photo' => ['required','image','mimes:jpg,png,jpeg','max:1000'],
        ],$this->message);
    }

    public function uploadProductImage($image){
        $img =$image;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $postImage = Carbon::now()->timestamp.'blog.png';//generate name for image
        $img = Image::make($image_base64)->encode('jpg', 60);
        file_put_contents('assets/images/ebooks/'.$postImage, $img->stream()->__toString());

        return $postImage;
    }

    public function addEbook($formData){
        $this->validate([
            'title' => ['required','string','max:200'],
            'description' => ['required','string','max:16000000'],
            'category' => ['required','string','max:200'],
            'author' => ['required','string'],
            'photo' => ['required','image','mimes:jpg,png,jpeg','max:1000'],
        ],$this->message);

        $bookImageName  = $this->uploadProductImage($formData['croped_image']);

        eBook::create([
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'cover' => $bookImageName,
            'author' => $this->author,
            'status' => 1
        ]);
        $this->dispatch('feedback',feedback:'Ebook Added successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.website-admin.ebooks.upload-ebook-component')->layout('livewire.website-admin.layouts.app');
    }
}
