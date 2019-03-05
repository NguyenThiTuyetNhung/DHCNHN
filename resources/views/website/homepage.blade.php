@extends('website.layouts.master')

@section('title', 'Trang chu')


@section('content')
<!-- slider-area-start -->
@include('website.partials.slider_wrapper')
<!-- slider-area-end -->
<!--Hot Deal product start-->
@include('website.partials.hot_details_product')
<!--Hot Deal product end-->
<!--Newsletter section start -->
@endsection