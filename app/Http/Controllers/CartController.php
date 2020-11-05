<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models;
use App\Models\Product;

class CartController extends Controller
{
    //
    public function addToCart($id){
        $product = Product::where('id_sp','=',$id)->frst();
        Cart::add(['id' => $id, 'name' => $product->ten_sp, 'qty' => 1, 'price' => $product->prod_price, ]);
        return redirect('cart/show');
    }
    public function getShowCart(){
        $total=Cart::total();
        $data = Cart::content();
        return view('cart')->with(['data'=>$data],['totla'=>$total]);
    }
}
