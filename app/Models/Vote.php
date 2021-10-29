<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Vote extends Model
{
    protected $guarded = [];
//    protected $table = 'votes';
//    public $timestamps = false;
//    protected $fillable = [
//        'score', 'voteable_id', 'voteable_type', 'user_id'
//    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    protected function setKeysForSaveQuery($query)
    {
        return $query->where('user_id', '=', $this->attributes['user_id'])
            ->where('voteable_type', '=', $this->attributes['voteable_type'])
            ->where('voteable_id', '=', $this->attributes['voteable_id']);
    }

}
