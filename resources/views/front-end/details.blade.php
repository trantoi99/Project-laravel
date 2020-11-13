@extends('front-end.master') @section('title','Detail Page') @section('main')

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
                    <h3>{{number_format($value->prod_price,0,',','.')}} VNĐ</h3>
                </div>
            </div>
            <div>
                <a  class="btn btn-primary btn-xl" href="{{route('cart.add',$value->id_sp)}}">Đặt hàng online</a>
            </div>
        </div>
    </div>
    <div class="ml-auto">
        <div class="detail__title--color pb-4">
            <h3>Chi tiết sản phẩm</h3>
        </div>
        <table class="table table-striped table-bordered">
            <tbody>
                <tr>

                    <td>
                        <h5>Tên Sản Phẩm</h5>
                    </td>
                    <td>
                        <h5>{{$value->ten_sp}}</h5>
                    </td>
                </tr>
                <tr>

                    <td>
                        <h5>Hệ Điều Hành</h5>
                    </td>
                    <td>
                        <h5>{{$value->hedieuhanh}}</h5>
                    </td>
                </tr>
                <tr>

                    <td>
                        <h5>Loại Màn Hình</h5>
                    </td>
                    <td>
                        <h5>{{$value->manhinh}}</h5>
                    </td>
                </tr>
                <tr>

                    <td>
                        <h5>Ram</h5>
                    </td>
                    <td>
                        <h5>{{$value->ram}}</h5>
                    </td>
                </tr>
                <tr>

                    <td>
                        <h5>Bộ Nhớ Trong</h5>
                    </td>
                    <td>
                        <h5>{{$value->rom}}</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Camera</h5>
                    </td>
                    <td>
                        <h5>{{$value->camera_sau}}</h5>
                    </td>
                </tr>
                <tr>

                    <td>
                        <h5>CPU</h5>
                    </td>
                    <td>
                        <h5>{{$value->cpu}}</h5>
                    </td>
                </tr>
                <tr>

                    <td>
                        <h5>Card Màn Hình</h5>
                    </td>
                    <td>
                        <h5>{{$value->card_mh}}</h5>
                    </td>
                </tr>
                <tr>

                    <td>
                        <h5>Giá Sản Phẩm</h5>
                        <td>
                            <h5>{{number_format($value->prod_price,0,',','.')}} VNĐ</h5>
                        </td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

@stop()
