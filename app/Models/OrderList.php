<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;
    protected $fillable = [
        'Customer_id',
        'Total_Harga'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id','id');
    }
    public function Cart()
    {
        return $this->hasMany('App\cart','orderlist_id','id');
    }
}
