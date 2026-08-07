<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionLike extends Model
{
    protected $fillable = [
        'question_id','ip','user_agent','key','is_like'
    ];
}
