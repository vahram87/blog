<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     public function tags(){

    	return $this->belongsToMany('App\Model\User\Tag','post_tags')->withTimestamps();
    }

    public function categories(){

   		return $this->belongsToMany('App\Model\User\Category','category_posts')->withTimestamps();
    }
    public function getRouteKeyName(){
    	return 'slug';
    }
}
