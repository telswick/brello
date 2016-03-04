<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lane extends Model
{
    public function tasks() {
    	$this->hasMany('\App\Task');
    	// a Lane has many tasks

    }
}
