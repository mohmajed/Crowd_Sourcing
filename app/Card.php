<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded =[];
    public function session() {
        return $this->belongsTo(Session::class);
    }
    public function user() {
    return $this->belongsTo(User::class);
    }
}
