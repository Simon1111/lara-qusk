<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table    = 'company';

    //
    protected $fillable = [
        'id', 
        'name',
        'shows',
        'click',
        'ctr',
        'expense',
        'limit',
        'price',
        'status'
    ];
}