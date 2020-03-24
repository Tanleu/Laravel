<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [
        'parent_id',
        'name',
        'token'
    ];

    //
    public function users(){
        return $this->hasMany('App\User');
    }
}
