<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table = 'generals'; // Table name

    protected $fillable = [
        'logo',
        'abt_title',
        'abt_desc',
        'abt_link',
        'abt_img',
        'why_title',
        'why_desc',
        'prod_title',
        'prod_desc',
        'contact',
        'contact_img',
        'email',
        'address',
        'ctc_title',
        'footer_desc',
    ];
}
