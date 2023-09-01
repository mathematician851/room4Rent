<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostelImage extends Model
{
    public $fillable = ['hostel_id', 'photo'];
}
