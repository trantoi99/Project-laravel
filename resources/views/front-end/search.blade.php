@extends('front-end.master')
@section('title','Search Page')
@section('main')
    <link rel="stylesheet" href="css/search.css">
                    <div id="wrap-inner">
                        <div class="products">
                            <h3>Tìm kiếm với từ khóa:{{$keywords}} <span></span></h3>    
                            <div class="product-list row"> 
                                @foreach($item as $value)
                                <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                    <p class="price">{{$value->ten_sp}}</p>
                                    <div class="marsk">
                                        <a href="{{asset('detail/'.$value->id_sp.'.html')}}">Xem chi tiết</a>
                                    </div>
                                </div>  
                                @endforeach
                            </div>
                           
@stop()
               