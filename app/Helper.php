<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Helper extends Model
{
    static function getColumnList($table_name){
        return Schema::getColumnListing($table_name);
    }
}
