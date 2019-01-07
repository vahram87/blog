<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){

    	$this->BelongsToMany('App\Model\User\Post','Post_tags');
    }
}
