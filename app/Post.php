<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
      'title', 'description', 'url', 'user_id', 'category_id'
    ];
    ///////////////relation///////////
    public function user(){
      return  $this->belongsTo(User::class, 'user_id');
    }/////user

    public function category(){
       return  $this->belongsTo(Category::class, 'category_id');
    }//category

    public function likes(){
        return $this->hasMany(Like::class);
    }////likee

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }////tags
}
