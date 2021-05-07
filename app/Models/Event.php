<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	public function workshops()
    {
        // return $this->hasMany(Workshop::class);
        return $this->hasMany(Workshop::class);
    }

    public function future_workshops()
    {
        // return $this->hasMany(Workshop::class);
        return $this->hasMany(Workshop::class)->whereDate('start', '>', Carbon::now('Europe/Stockholm'));
    }
}
