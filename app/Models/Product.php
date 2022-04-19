<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['created_at', 'updated_at'];

    public function alternatecodes(){
        return $this->hasMany('App\Models\Alternatecode');
    }

    public function department(){
        return $this->belongsTo('App\Models\Department');
    }

    public function group(){
        return $this->belongsTo('App\Models\Group');
    }


    public function itbmsbuy(){
        return $this->belongsTo('App\Models\Itbmsbuy');
    }

    public function itbmssale(){
        return $this->belongsTo('App\Models\Itbmssale');
    }

    public function line(){
        return $this->belongsTo('App\Models\Line');
    }

    public function prices(){
        return $this->hasMany('App\Models\Price');
    }

    public function stocks(){
        return $this->hasMany('App\Models\Stock');
    }

    public function trademark(){
        return $this->belongsTo('App\Models\Trademark');
    }

}
