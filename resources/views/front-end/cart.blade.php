@extends('front-end.master')
@section('title','Cart Page')
@section('main')
<link rel="stylesheet" href="css/cart.css">
                    <div id="wrap-inner">
                        <div id="list-cart">
                            <h3>Giỏ hàng</h3>
                            <form>
                                <table class="table table-bordered .table-responsive text-center">
                                    <tr>
                                        <td width="11.111%">Ảnh mô tả</td>
                                        <td width="22.222%">Tên sản phẩm</td>
                                        <td width="16.6665%">Số lượng</td>
                                        <td width="16.6665%">Đơn giá</td>
                                        <td width="16.6665%">Thành tiền</td>
                                        <td width="16.6665%">Cập Nhập</td>
                                    </tr>
                                    @foreach($cartItems as $item)
                                    <tr>
                                        <td><img class="img-responsive" src="img/home/product-1.png"></td>
                                        <td>{{$item->name}}</td>
                                        <td class="text-center">
                                            <div class="quantity_group justify-content-center">
                                                <button type="button" class="minus" onclick="decreaseValue()"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                <input class="text" name="quantity" type="number" value ="{{$item->quantity}}" min= "0" id="theInput" >
                                                <button type="button" class="plus" onclick="increaseValue()"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </td>
                                        <td><span class="price">{{number_format($item->price,0,',','.')}} VNĐ</span></td>
                                        <td><span class="price">{{number_format($item->price*$item->quantity,0,',','.')}} VNĐ</span></td>
                                        <td>
                                            <a class="text-success pr-2" href="{{route('cart.update',$item->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a class="text-danger" href="{{route('cart.destroy',$item->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach()
                                </table>
                                <div class="row  justify-content-center" id="total-price">

                                        <a href="{{asset('/checkout')}}" class="btn btn-success btn-lg mr-2">Thanh Toán</a>

                                        <a href="{{'/'}}" class="btn btn-lg bg-primary text-white">Mua tiếp</a>

                                </div>
                                <div class="row">

                                </div>
                            </form>
                        </div>

                        <div>
                        </div>

                    </div>
<script>
$(document).ready(function(){
    $("#theInput").bind("keypress", function(e){
        var keyCode = e.which ? e.which : e.keyCode;

        if(!(keyCode >= 48 && keyCode <= 57)){
            return false;
        }
        else{
            return true;
        }
    });


});

function updateCart(id){
    $.get('/cart/update/' + id).then(function(data){
        if(data != null){
            $("#theInput").val(data);
        }
        else{
            alert('Error');
        }
    }).catch(error => alert(error.message));
};

function increaseValue() {
    var value = parseInt(document.getElementById('theInput').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('theInput').value = value;
};

function decreaseValue() {
    var value = parseInt(document.getElementById('theInput').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('theInput').value = value;
};

</script>
@stop()

