@extends('front-end.master')
@section('title','Brand Page')
@section('main')
    <link rel="stylesheet" href="css/category.css">
    
                    <div id="wrap-inner">
                        <div class="products">
                        <h3>Sản phẩm theo hãng {{ $brand_id->ten_hang }}</h3>            
                            <div class="product-list row">
                                @foreach($data as $value)
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
                                    <p><a href="#">{{$value->ten_sp}}</a></p>
                                    <p class="price">{{$value->prod_price}}.VND</p>
                                    <div class="marsk">
                                        <a href="{{asset('detail/'.$value->id_sp.'.html')}}">Xem chi tiết</a>
                                    </div>
                                </div>  
                                @endforeach
                            </div>                
                           {{ $data->links() }}
                        </div>
                    </div>
@stop()