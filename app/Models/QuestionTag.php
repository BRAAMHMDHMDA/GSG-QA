<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class QuestionTag extends Pivot
{
    use HasFactory;
    protected $table = 'question_tags';
    public $timestamps = false;
    protected $fillable = [
        'question_id' , 'tag_id',
    ];
}
