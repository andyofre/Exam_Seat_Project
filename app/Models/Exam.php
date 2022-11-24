<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function course(){

        return $this->belongsTo('App\Models\Course', 'course_id', 'id');

    }


    public function hall(){

        return $this->belongsTo('App\Models\Hall', 'hall_id', 'id');

    }

}
