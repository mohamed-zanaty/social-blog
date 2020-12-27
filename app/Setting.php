<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [

      'name', 'description', 'value',

    ];
    protected $hidden = [
        'updated_at', 'created_at'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }//////User
}
