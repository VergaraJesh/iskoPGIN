<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    //
    protected $table = 'skills';
    protected $fillable = [
        'skillname',
    ];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
