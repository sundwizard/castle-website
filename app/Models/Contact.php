<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Contact extends Model
{
    use HasFactory;
    use UUID;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'comment',
    ];
}
