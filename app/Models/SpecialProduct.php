<?php
// bảng sản phẩm đặc biệt
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class SpecialProduct extends Model
{
    //
    protected $fill_table = [
        'id_ssp',
        'id_sp',
        'hinhanh_ssp',
    ];
    protected $table = 'sanpham_dacbiet';
    public function product(){
        return $this->hasMany(Product::class);
    }
}
