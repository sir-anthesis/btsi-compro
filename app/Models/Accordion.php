<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accordion extends Model
{
    protected $table = 'accordions';

    protected $fillable = [
        'title',
        'description',
    ];
}
