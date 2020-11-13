<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\SpecialProduct;
use App\Models\Comment;
use Exception;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // get home page
    public function getHome(){
        //get sp dac biet

        $data = Product::join('sanpham_dacbiet', 'sanpham.id_sp', '=', 'sanpham_dacbiet.id_sp')
                        ->select(['sanpham.*', 'sanpham_dacbiet.id_ssp'])
                        ->paginate(6);
        // get list sản phẩm
        $lst_product = Product::orderBy('id_sp','asc')->paginate(6);
        // get list brand
        $brand = Brand::all();
        //get list category
        $category = Category::all();
        return view('front-end.home')->with(['lst_product' => $lst_product])->with(['brand' => $brand])->with(['category' => $category])->with(['data' => $data]);
    }

    // get detail page
    public function getDetail($id){
       // $value = Product::find($id);
        $value = DB::table('sanpham')->where('id_sp', $id)->first();
        $brand = Brand::all();
        $category = Category::all();
        return view('front-end.details')->with(['value' => $value])->with(['brand' => $brand])
        ->with(['category' => $category]);
    }

    // get brand
    public function getBrand($id){
       try{
           $data = Product::where('id_hang' , '=', $id)->paginate(6);
           $brand = Brand::all();
           $category = Category::all();
           $brand_id = Brand::where('id_hang', '=', $id)->first();
           return view('front-end.brand')->with(['data' => $data, 'brand' => $brand, 'brand_id' => $brand_id])->with(['category' => $category]);
       }
       catch(Exception $e){
           return view('front-end.brand');
       }
    }
    //get category
    public function getCategory($id){
        try{
            $data = Product::where('id_danhmuc' , '=', $id)->paginate(6);
            $brand = Brand::all();
            $category = Category::all();
            $category_id = Category::where('id_danhmuc', '=', $id)->first();
            return view('front-end.category')->with(['data' => $data,'category'=>$category ,'category_id' => $category_id])->with(['brand' => $brand]);
        }
        catch(Exception $e){
            return view('front-end.category');
        }
    }

    public function getSearch(Request $request){
        $result = $request->result;
        $brand = Brand::all();
        $category = Category::all();
        $item = DB::table('sanpham')->where('ten_sp','like','%'.$result.'%')->get();
        return view('front-end.search')->with(['keywords' =>$result,'item'=>$item, 'brand' => $brand,'category'=>$category]);
    }

    /*public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
        ]);

        $data = [
          'subject' =>
          'email' => $request->email,
          'content' => $request->content
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }*/


}
