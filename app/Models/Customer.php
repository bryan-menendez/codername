<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //only recieve these params
    //$fillable = ['name', 'email', 'active'];

    //recieve any but those inside the array
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('active',1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active',0);
    }
}
