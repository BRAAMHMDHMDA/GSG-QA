<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'slug'];
    protected $appends = ['permalink'];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'question_tags', 'tag_id', 'question_id', 'id', 'id');
    }

    public function getPermalinkAttribute()
    {
        return route('tags.show', $this->slug);
    }
}
