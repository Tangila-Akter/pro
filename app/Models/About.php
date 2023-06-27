<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'website',
        'phone',
        'image',
        'city',
        'age',
        'degree',
        'email',
        'freelance',
        'location',
        'facebook',
        'twitter',
        'instagram',
        'skype',
        'linkedin',
    ];
}
