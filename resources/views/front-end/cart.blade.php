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
                                    <tr id="item{{ $item->id }}">
                                        <td><img class="img-responsive" src="img/home/product-1.png"></td>
                                        <td>{{$item->name}}</td>
                                        <td class="text-center">
                                            <div class="quantity_group justify-content-center">
                                                <button type="button" class="minus btn-number" onclick="updateCart({{ $item->id }})" data-type="minus" data-field="{{ $item->id }}"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                <input class="form-control input-number" name="{{ $item->id }}" type="text" value ="{{ $item->quantity }}" min="1" max="100" id="{{ $item->id }}" onkeyup="updateCart({{ $item->id }})" data-price="{{ $item->price }}">
                                                <button type="button" class="plus btn-number" onclick="updateCart({{ $item->id }})" data-type="plus" data-field="{{ $item->id }}"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </td>
                                        <td><span class="price">{{number_format($item->price,0,',','.')}} VNĐ</span></td>
                                        <td><span class="price {{ $item->id }}">{{number_format($item->price*$item->quantity,0,',','.')}} VNĐ</span></td>
                                        <td>
                                            <button class="btn btn-danger" type="button" onclick="removeCart({{ $item->id }})"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
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
@endsection
@push('scripts')
<script src="{{ URL::to('front-end/jsWebsite/cart.js') }}"></script>
@endpush

