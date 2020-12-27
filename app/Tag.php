<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
        protected $fillable = [
          'name'
        ];


    #######relation
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
