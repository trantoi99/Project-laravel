<?php
// bảng sản phẩm
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Product extends Model
{
    //
    protected $fill_table = [
        'id_sp',
        'id_danhmuc',
        'id_hang',
        'ten_sp',
        'hinhanh_sp',
        'hedieuhanh',
        'manhinh',
        'ram',
        'rom',
        'camera_sau',
        'cpu',
        'card_mh',
        'prod_price',
    ];
    protected $table = 'sanpham';
    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }
    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
