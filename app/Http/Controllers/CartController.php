<?php

namespace App\Http\Controllers;


use Cart;
use App\Models\Product;
use DB;
use App\Models\Brand;
use App\Models\Category;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function add($id)
    {
        // add the product to cart
        $product = DB::table('sanpham')->where('id_sp','=',$id)->first();
        Cart::add(array(
            'id' => $product->id_sp,
            'name' => $product->ten_sp,
            'price' => $product->prod_price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));
        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = Cart::getContent();
        $brand = Brand::all();
        $category = Category::all();
        /*$total = Cart::getTotal();*/
        return view('front-end.cart')->with(['cartItems'=>$cartItems, 'brand' => $brand,'category'=>$category]);
    }

    public function destroy($id)
    {
       Cart::remove($id);
        return back();
    }
    public function update(Request $request)
    {
        Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
        ));

        return back();
    }
    public function getCheckOut(){
        $brand = Brand::all();
        $category = Category::all();
        return view('front-end.checkOut')->with(['brand' => $brand])->with(['category' => $category]);
    }
}
