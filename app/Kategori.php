<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategoris";
    protected $fillable = ['namaKategori'];

    public function produk() {
      return $this->hasMany('Produk', 'idKategori');
    }
}
