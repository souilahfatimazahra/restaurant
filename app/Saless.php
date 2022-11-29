<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saless extends Model
{
    protected $fillable=["user_id", "quantity","total_price","tota_received","change","payment_type","payment_status"];

    public function menus(){
        $this->belongsToMany(Menu::class);
    }
    public function tables(){
        return  $this->belongsToMany(Table::class);
    }
    public function servant()
    {
        return $this->belongsTo(Servants::class);
    }
}
