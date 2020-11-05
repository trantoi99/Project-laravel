<?php
// bảng hóa đơn
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    //
    protected $fill_table = [
        'id_hd',
        'id_tk',
        'ten_sp',
        'so_luong',
        'gia_ca',
        'thanh_tien',
        'ngay_mua'
    ];
    protected $table = 'hoadon';
    // quan hệ các bảng
    public function product(){
        return $this->belongsTo('App\Product','id_sp');
    }
}
