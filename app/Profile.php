<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profilePicture()
    {
        $pathway = ($this->profile_pic) ? $this->profile_pic : "profile/base.jpeg";
        return '/storage/' . $pathway;
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
