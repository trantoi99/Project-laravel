@extends('front-end.master')
@section('title','Home Page')
@section('main')



                    <div id="wrap-inner">
                        <div class="products">
                            <div class="product-list row py-3 my-3 px-2 bg-primary"> <h3>Sản phẩm nổi bật</h3></div>
                            <div class="product-list row">
                            @foreach($data as $prod_spe)
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
                                    <p><a href="#">{{$prod_spe->ten_sp}}</a></p>
                                    <p class="price">{{number_format($prod_spe->prod_price,0,',','.')}} VNĐ</p>
                                    <div class="marsk">
                                        <a href="{{asset('detail/'.$prod_spe->id_sp.'.html')}}">Xem chi tiết</a>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <div class="center pt-3">
                                {{ $data->links() }}
                            </div>
                        </div>

                        <div class="products">
                            <div class="product-list row py-3 px-2 mb-3 bg-primary"> <h3>Sản phẩm mới</h3></div>
                            <div class="product-list row">
                            @foreach($lst_product as $value)
                                <div class="product-item col-md-4">
                                    <a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
                                    <p><a href="#">{{$value->ten_sp}}</a></p>
                                    <p class="price">{{number_format($value->prod_price,0,',','.')}} VNĐ</p>
                                    <div class="marsk">
                                        <a href="{{asset('detail/'.$value->id_sp.'.html')}}">Xem chi tiết</a>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <div class="center pt-3">
                                {{ $lst_product->links() }}
                            </div>
                        </div>
                    </div>
@stop()
