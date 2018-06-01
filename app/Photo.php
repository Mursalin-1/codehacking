<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $images = '/images/';

    protected $fillable = ['path'];

    protected function getPathAttribute($photo){
        return $this->images.$photo;
    }
}
