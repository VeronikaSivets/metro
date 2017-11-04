<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'settings';

    protected $fillable = [
        'title', 'img'
    ];
   
    public function diseases()
    {
        return $this->hasMany('App\Disease');
    }
}
