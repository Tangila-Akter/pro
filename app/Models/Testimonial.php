<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'text',
        'image',
    ];
}
//wait ami table gula add kori nai. vule gasi. hard disk problem silo agar project nai. ami 5 min a thik kore knock di
//ok