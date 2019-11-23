<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binditems extends Model
{
    //
    protected $fillable = [
        'facilityId',
        'itemId'
    ];
}
