<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Poll;

class Option extends Model
{
    protected $fillable = [
    	'poll_id',
    	'name',
    	'image',
    ];

    public function poll()
    {
    	return $this->belongsTo(Poll::class);
    }
}
