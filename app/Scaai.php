<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scaai extends Model
{
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
