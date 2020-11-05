@extends('front-end.master') 
@section('title','Detail Page') 
@section('main')

<link rel="stylesheet" href="css/details.css">

<div id="wrap-inner">
        <div class="row py-4">
            <div id="product-img" class="col-md-6 text-center">
                <img src="img/details/product.jpg">
            </div>
            <div class="col-md-6 my-auto">
                <div style="color: red" class="pb-3">
                    <h3>{{$value->ten_sp}} </h3>
                </div>
                <div class="d-flex">
                    <div>
                        <h3>Giá : </h3>
                    </div>
                    <div class="pl-2">
                        <h3>{{$value->prod_price}}&nbsp; VNĐ.</h3>
                    </div>
                </div>
                <div>
                    <p class="add-cart text-center"><a href="#">Đặt hàng online</a></p>
                </div>
            </div>
        </div>
        <div class="ml-auto">
                <div class="detail__title--color pb-4">
                    <h3>Chi tiết sản phẩm</h3>
                </div>
                <div class="d-flex pb-2">
                    <div class="col-md-4">
                        <h5>Tên Sản Phẩm :</h5>
                    </div>
                    <div class="col-md-8 pl-2">
                        <h5>{{$value->ten_sp}}</h5>
                    </div>
                </div>
                <div class="d-flex pb-2">
                    <div class="col-md-4">
                        <h5>Hệ Điều Hành :</h5>
                    </div>
                    <div class="col-md-8 pl-2">
                        <h5>{{$value->hedieuhanh}}</h5>
                    </div>
                </div>
                <div class="d-flex pb-2">
                    <div class="col-md-4">
                        <h5>Loại màn hình :</h5>
                    </div>
                    <div class="col-md-8 pl-2">
                        <h5>{{$value->manhinh}}</h5>
                    </div>
                </div>
                <div class="d-flex pb-2">
                    <div class="col-md-4">
                        <h5>Ram :</h5>
                    </div>
                    <div class="col-md-8 pl-2">
                        <h5>{{$value->ram}}</h5>
                    </div>
                </div>
                <div class="d-flex pb-2">
                    <div class="col-md-4">
                        <h5>Rom:</h5>
                    </div>
                    <div class="col-md-8 pl-2">
                        <h5>{{$value->rom}}</h5>
                    </div>
                </div>
                <div class="d-flex pb-2">
                    <div class="col-md-4">
                        <h5>Camera :</h5>
                    </div>
                    <div class="col-md-8 pl-2">
                        <h5>{{$value->camera_sau}}</h5>
                    </div>
                </div>
                <div class="d-flex pb-2">
                    <div class="col-md-4">
                        <h5>CPU:</h5>
                    </div>
                    <div class="col-md-8 pl-2">
                        <h5>{{$value->cpu}}</h5>
                    </div>
                </div>
                <div class="d-flex pb-2">
                    <div class="col-md-4">
                        <h5>Card màn hình :</h5>
                    </div>
                    <div class="col-md-8 pl-2">
                        <h5>{{$value->card_mh}}</h5>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-md-4">
                        <h5>Giá Sản Phẩm :</h5>
                    </div>
                    <div class="col-md-8 pl-2">
                        <h5>{{$value->prod_price}}.VNĐ</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop()