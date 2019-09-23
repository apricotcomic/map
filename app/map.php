<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    //
    protected $table = 'maps';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'memberId','infraCode','floor','fileName','xCoordinate', 'yCoordinate', 'zCoordinate',
    ];
}
