<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $fillable = ['tenKH', 'email', 'diachi', 'sodienthoai', 'tongtien'];
    public function chitiethoadon()
    {
        return $this->hasMany(chitiethoadon::class, 'hoadon_id', 'id');
    }
}
