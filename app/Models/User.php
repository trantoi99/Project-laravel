<?php
// bảng tài khoản
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fill_table = [
        'id_tk',
        'username',
        'password',
        'email',
        'phone',
        'address',
        'use_type',
    ];
    protected $brand = 'hang';
}
