<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['created_at', 'updated_at'];

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }

    public function storage(){
        return $this->belongsTo('App\Models\Storage');
    }

    public function shelf(){
        return $this->belongsTo('App\Models\Shelf');
    }
}
