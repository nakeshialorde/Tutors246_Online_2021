<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    public $table = 'chapter1__quiz1';
    public $fillable =['quizname', 'name', 'grade'];
}
