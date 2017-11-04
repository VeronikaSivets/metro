<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $table = 'diseases';

    protected $fillable = [
        'title', 'description'
    ];

    public function setting()
    {
        return $this->belongsTo('App\Setting');
    }
}
