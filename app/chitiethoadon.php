<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    protected $fillable = ['hoadon_id', 'sanpham_id', 'soluong'];

    public function hoadon()
    {
        # code...
        return $this->belongsTo(hoadon::class);
    }
}
