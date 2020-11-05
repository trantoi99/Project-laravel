<?php
// bảng bình luận
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fill_table = [
        'id_cmt',
        'id_sp',
        'ten_cmt',
        'email_cmt',
        'noidung_cmt',
        'ngay_cmt',
    ];
    protected $table = 'binhluan';
}
