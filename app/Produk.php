<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produks";
    protected $fillable = ['namaProduk','idKategori','beratProduk','tanggalProduksi','hargaProduk'];

    public function kategoori() {
		return $this->belongsTo('Kategori', 'idKategori');
    }

    public function detailProduk() {
      return $this->hasMany('OrderDetail', 'idProduk');
    }
}
