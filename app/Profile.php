<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   protected $guarded=[];
    public function profileImage(){
        $imagePath=($this->image)?$this->image:'profile/ytJFu86xD2ETo2ypt9WBQXLHC5IPwuxz2QIvRi3N.jpeg';
    return '/storage/'.$imagePath;
}
public function followers(){
        return $this->belongsToMany(User::class);
}
    public function user(){
        return $this->belongsTo(User::class);
    }
}
