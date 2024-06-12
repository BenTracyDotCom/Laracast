<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $guarded = [];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function complete($completed = true)
    {
        return $this->update(['completed' => $completed]);
    }

    public function incomplete()
    {
        return $this->complete(false);
    }
}
