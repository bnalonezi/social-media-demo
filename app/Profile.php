<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'url'
    ];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/no-image.png';

        return '/storage/'.$imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
