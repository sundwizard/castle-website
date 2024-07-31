<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class NewsLetter extends Model
{
    use HasFactory;
    use UUID;

    protected $fillable = [
        'title',
        'image',
        'description',
        'file'
    ];
}
