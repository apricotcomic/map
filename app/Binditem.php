<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binditem extends Model
{
    //
    protected $fillable = [
        'facilityId',
        'itemId'
    ];
}
