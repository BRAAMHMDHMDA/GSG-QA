<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'slug'
    ];
    public function questions()
    {
        return $this->belongsToMany(Question::class, 'qusetion_tags', 'tag_id', 'question_id', 'id', 'id');
    }
}
