<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    //
    protected $table = 'floors';

    protected $fillable = [
        'place_id',
        'floorName',
        'xCoordinate',
        'yCoordinate',
        'xCoordinate',
        'fileName',
    ];

    public function facilities() {
        return $this->hasMany(Facility::class);
    }
}
