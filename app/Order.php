<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = "orders";
    protected $fillable = ['orderDate','idCostmer','idKirim'];
    
    public function kirim() {
		return $this->belongsTo('Kirim', 'idKirim');
    }

    public function costumer() {
		return $this->belongsTo('User', 'id');
    }

    public function orderDetail() {
      return $this->hasMany('OrderDetail', 'idOrder');
    }
}
