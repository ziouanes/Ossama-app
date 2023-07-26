<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class vehicule extends Model
{
    use SoftDeletes;


    protected $guarded = [];

    protected $data = ['deleted_at'];

    public function section()
    {
        return $this->belongsTo('App\sections');
    }
}
