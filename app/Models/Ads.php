<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    //
    protected $table    = 'ads';

    //
    protected $fillable = [
        'id', 
        'company_id',
        'text',
        'title',
        'image',
        'shows',
        'click',
        'limit',
        'lid',
        'ctr',
        'cpm',
        'price',
        'status'
    ];
}
