<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Participant;
use App\Models\Option;

class ParticipantVote extends Model
{
    protected $fillable = [
    	'participant_id',
    	'option_id'
    ];

    public function participant()
    {
    	return $this->belongsTo(Participant::class);
    }

    public function option()
    {
    	return $this->belongsTo(Option::class);
    }
}
