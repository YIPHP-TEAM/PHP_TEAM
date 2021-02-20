<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Point extends Model
{
    public $timestamps = false;

    protected $table = 'points';

    use SoftDeletes;

    protected $fillable = [
        'clear', 'content', 'created_at','deleted_at','id','updated_at','user_id', //追記
    ];
}