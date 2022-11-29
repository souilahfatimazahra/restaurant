<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable=["name","status","slug"];
    public function getRoutekeyName(){
        return "slug";
    }
    public function sales(){
        return $this->belongsToMany(Saless::class);
    }
    //
}
