<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    //
    protected $table = 'floors';

    protected $fillable = [
        'membaerId',
        'placeCode',
        'floorName',
        'xCoordinate',
        'yCoordinate',
        'xCoordinate',
        'fileName',
    ];
}
