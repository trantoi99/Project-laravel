@extends('front-end.master') @section('title','Checkout Page') @section('main')

<link rel="stylesheet" href="css/cart.css">

<div id="wrap-inner">
<div id="xac-nhan">
                            <h3>Xác nhận mua hàng</h3>
                            <form id="form-input" onsubmit="return false">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input required type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="name">Họ và tên:</label>
                                    <input required type="text" class="form-control" id="tenKH" name="tenKH">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Số điện thoại:</label>
                                    <input required type="number" class="form-control" id="sodienthoai" name="sodienthoai">
                                </div>
                                <div class="form-group">
                                    <label for="add">Địa chỉ:</label>
                                    <input required type="text" class="form-control" id="diachi" name="diachi">
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" id="save" class="btn btn-default">Thực hiện đơn hàng</button>
                                </div>
                            </form>
                        </div>
</div>


@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $("#save").on('click',function(){
            var form_data = $("#form-input").serialize();
            $.ajax({
                method: 'POST',
                url: '/cart/save',
                data: form_data,
                dataType: 'json',
                success: function(msg){
                    if(msg.success){
                        alert(msg.message);
                        setTimeout(function(){
                            window.location.href = "/cart";
                        }, 1500);
                    }
                    else{
                        alert(msg.message);
                    }
                },
                error: function(error){
                    alert(error.message);
                }
            })
        })
    });
</script>
@endpush
