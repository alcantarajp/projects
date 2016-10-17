<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = [
      'id',
      'post_id',
      'name',
      'coment',
      'email'
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
