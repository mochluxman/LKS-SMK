<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kirim extends Model
{
    protected $table = "kirims";
    protected $fillable = ['namaPaket','hargaPaket'];

    public function orderKirim() {
        return $this->hasMany('Order', 'idKirim');
    }
}
