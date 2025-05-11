<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Highlight extends Model
{
    use HasFactory;

    protected $table = 'highlights';

    protected $fillable = [
        'image',
        'icon',
        'title',
        'description',
    ];
}
