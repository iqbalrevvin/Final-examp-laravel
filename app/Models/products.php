<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $hidden =['created_at'.'updated_at'];

    public function Cart()
    {
        return $this->hasMany('App\Cart','products_id','id');
    }


}
