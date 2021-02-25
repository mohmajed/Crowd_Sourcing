<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded =[];
   /*protected $fillable = ['title','problem','key','nbParticipants','user_id'];*/

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cards(){
        return $this->hasMany(Card::class);
    }
}
