@extends('frontend.layouts.master')
@section('content')
    <div class="section pagetitle-wrapper">
        <div class="container">
            <div class="pagetitle">
                <div class="title">{{ $cat_name }}</div>
            </div>
        </div>
    </div>
    <div class="blue-grey-bg">
        <!-- BREADCRUMB-->
        <section class="breadcrumb">
            <div class="container">
                <p>
                    <a href="/">Trang chủ</a>
                    <a href="{{ route($cat_route) }}">{{ $cat_name }}</a>
                </p>
            </div>
        </section>
        <!-- END: BREADCRUM-->
        <!-- MAIN CONTENT PAGE-->
        <div class="main-content-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-content-page-body">
                            <h1>{{ $cat_name }}</h1>
                            <div class="noi-dung-bai-viet">
                                @foreach($posts as $post)
                                <div class="list-item">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="list-item-img">
                                                <a href="{{ route('tintuc.show', $post->slug) }}">
                                                    @if($post->image)
                                                        <img src="/storage/{{ $post->image }}" class="img-responsive" alt="{{ $post->name }}">
                                                    @else
                                                        <img src="http://via.placeholder.com/270x169" class="img-responsive" alt="{{ $post->name }}">
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                            <div class="list-item-name">
                                                <a href="{{ route('tintuc.show', $post->slug) }}">{{ $post->title }}</a>
                                            </div>
                                            <div class="list-item-description">
                                                <p>{{ $post->excerpt }}</p>
                                            </div>
                                            <a class="rm" href="{{ route('tintuc.show', $post->slug) }}">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: MAIN CONTENT PAGE-->
    </div>
@endsection
