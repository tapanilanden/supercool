<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
    public function roles() {
        return belongsToMany('Role', 'role__rights', 'role_id', 'right_id')
    }
}
