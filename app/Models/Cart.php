<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsTo('App\Products','products_id','id');
    }
    public function Orderlist()
    {
        return $this->belongsTo('App\Orderlist','orderlist_id','id');
    }
}
