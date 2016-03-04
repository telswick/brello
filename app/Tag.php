<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function tasks() {
    	$this->belongsToMany('\App\Task');
    	// a Tag belongs to many tasks

    }
}
