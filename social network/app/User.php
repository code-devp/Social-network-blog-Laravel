<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
   use \Illuminate\Auth\Authenticatable;
   public function posts(){

   	// defines user relations one to many

   	return $this->hasMany('App\Post');
   }

}
