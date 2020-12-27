<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';
    protected $fillable = [
        'user_id', 'post_id', 'like',
    ];
    ########################relation####################
    public function post(){
        return $this->belongsTo(Post::class);
    }///for post
     public function user(){
        return $this->belongsTo(User::class);
    }///for user

}
