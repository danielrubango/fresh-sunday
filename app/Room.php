<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];
	
	public function reservation()
	{
		return $this->hasMany(Reservation::class);
	}

	public function data()
	{
		return $this->morphOne('service', Service::class);
	}

	public function getOccupedAttribute()
	{
		return $this->reservation->user;
	}
}
