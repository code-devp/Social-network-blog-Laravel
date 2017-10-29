<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){

// defines relations (rdbms)
    	return $this->belongsTo('App\User');

    }
}
