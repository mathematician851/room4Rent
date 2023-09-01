<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    public $fillable = ['campus_id'];

	public function campus(){
		return $this->belongsTo('App\Campus');
	}
		public function rooms(){
		//hostel has many rooms
		return $this->hasMany('App\Room');
	}

    public function images(){
        //hostel has many images
        return $this->hasMany('App\HostelImage', 'hostel_id', 'id');
    }
}