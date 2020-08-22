<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comment extends Model
{
    protected $fillable = [
    	'poll_id',
    	'user_id',
    	'name',
    	'content',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
