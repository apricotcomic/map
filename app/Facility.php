<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //
    protected $fillable = [
        "floor_id",
        "facilityNo",
        "xCoordinate",
        "yCoordinate",
        "facilityName",
    ];

    public function floors() {
        return $this->belongsTo(Floor::class);
    }

    public function bind()
    {
        return $this->hasMany('App\binditem', 'facility_id', 'id');
    }

}
