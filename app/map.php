<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class map extends Model
{
    //
    protected $map = 'map';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fileName',
    ];
}
