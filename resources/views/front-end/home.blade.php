@extends('front-end.master')
@section('title','Home Page')
@section('main')
    
    

                    <div id="wrap-inner">
                        <div class="products">
                            <h3>sản phẩm nổi bật</h3>
                            <div class="product-list row">
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-1.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-3.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-4.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                    </div>
                                </div>
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-1.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-4.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-3.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
                                    <p><a href="#">iPhone 6S Plus 64G</a></p>
                                    <p class="price">10.000.000</p>
                                    <div class="marsk">
                                        <a href="#">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="products">
                            <h3>sản phẩm mới</h3>
                            <div class="product-list row"> 
                            @foreach($lst_product as $value)                          
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
                            <div class="center">
                                {{ $lst_product->links() }}
                            </div>
                        </div>
                    </div>
@stop()