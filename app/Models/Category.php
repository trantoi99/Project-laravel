<?php
// Bảng danh mục 
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fill_table = [
        'id_danhmuc',
        'ten_danhmuc',
    ];
    protected $table = 'danhmuc';

    public function products()
    {
        return $this->hasMany(Product::class, 'id_danhmuc', 'id_danhmuc');
    }
}
