@extends('front-end.master') @section('title','Checkout Page') @section('main')

<link rel="stylesheet" href="css/cart.css">

<div id="wrap-inner">
<div id="xac-nhan">
                            <h3>Xác nhận mua hàng</h3>
                            <form>
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input required type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="name">Họ và tên:</label>
                                    <input required type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại:</label>
                                    <input required type="number" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="add">Địa chỉ:</label>
                                    <input required type="text" class="form-control" id="add" name="add">
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
                                </div>
                            </form>
                        </div>
</div>


@stop()
