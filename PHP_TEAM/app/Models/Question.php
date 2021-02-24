<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    public $timestamps = false;

    use SoftDeletes;

    protected $table = 'questions';
}
