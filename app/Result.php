<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Result extends Model
{
    protected $table = 'result';
    public static function insertData($data){
        DB::table('result')->insert($data);
    }
    protected $casts = [
        'properties' => 'array'
    ];
}
