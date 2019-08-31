@extends('frontend.layouts.master')
@section('content')
    <div class="section pagetitle-wrapper">
        <div class="container">
            <div class="pagetitle">
                <div class="title">{{ $gc->ten }}</div>
            </div>
        </div>
    </div>
    <div class="blue-grey-bg">
        <section class="breadcrumb">
            <div class="container">
                <p>
                    <a href="/">Trang chủ</a>
                    <a href="{{ route('goichup', $gc->slug) }}">{{ $gc->ten }}</a>
                </p>
            </div>
        </section>
    </div>
    <div class="main-content-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content-page-body">
                        <h1>{{ $gc->ten }}</h1>
                    </div>
                </div>
                <div class="noi-dung-bai-viet">
                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="owl-carousel owl-theme">
                                @foreach(json_decode($gc->images,true) as $item)
                                <div><img src="/storage/{{ $item }}"></div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12">
                            <div class="chi-tiet">Chi tiết</div>
                            <div class="noi-dung">
                                {!! $gc->noi_dung !!}
                            </div>
                            <div class="gia">
                                @if(is_numeric($gc->gia_tien))
                                    Giá: {{ number_format($gc->gia_tien) }}<sup>đ</sup>
                                @else
                                    Giá: Chưa cập nhật
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js-stack')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items: 1,
            autoplay:true,
            autoplayTimeout: 5000,
            autoHeight:true
        })
    </script>
@endpush
