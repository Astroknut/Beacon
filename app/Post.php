<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //Guarded(unallowed mass assignment) fields
	protected $guarded = [];

    //Declare ERDs
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Method to create new comment for post
    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }
}
