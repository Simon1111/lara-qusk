<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $table    = 'finance';

    //
    protected $fillable = [
        'id', 'ssp', 'expenseDsp', 'expenseSsp', 'rates'
    ];
}