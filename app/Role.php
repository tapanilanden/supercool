<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users() {
        return $this->belongsToMany('User', 'user__roles', 'user_id', 'role_id');
    }
    
    public function rights() {
        return $this->belongsToMany('Right', 'role__rights', 'role_id', 'right_id');
    }
}
