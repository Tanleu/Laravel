<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'category_id',
        'name',
    ];

    //
    public function Category(){
        return $this->belongsTo('App\Categories');
    }
}
