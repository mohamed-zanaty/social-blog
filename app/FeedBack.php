<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $table = 'feed_backs';
    protected $fillable = [
        'name', 'evaluation', 'message'
    ];
}
