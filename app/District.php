<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['district'];

    public function companies(){
        return $this->hasMany(Company::class, 'district_id', 'id');
    }
}
