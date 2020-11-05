<?php
// bảng hãng
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fill_table = [
        'id_hang',
        'ten_hang',
        'id_danhmuc',
        'anh_hang',
    ];
    protected $table = 'hang';

    public function products()
    {
        return $this->hasMany(Product::class, 'id_hang', 'id_hang');
    }
}
