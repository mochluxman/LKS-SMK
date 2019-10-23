<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_details";
    protected $fillable = ['jumlahBarang','totalHarga','idOrder','idProduk'];
    
    public function order() {
		return $this->belongsTo('Order', 'idOrder');
    }

    public function produk() {
		return $this->belongsTo('Produk', 'idProduk');
    }
}
