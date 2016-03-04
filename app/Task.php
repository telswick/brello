<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function lane()  {
    	$this->belongsTo('\App\Lane');
    	// a Task belongs to a lane
    }

    public function tags() {
    	$this->belongsToMany('\App\Tag');
    	// a Task belongs to many tags
    }
}
