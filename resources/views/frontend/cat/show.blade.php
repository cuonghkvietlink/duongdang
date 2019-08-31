@extends('frontend.layouts.master')
@section('content')
    <div class="section pagetitle-wrapper">
        <div class="container">
            <div class="pagetitle">
                <div class="title">
                    {{ $post->category->name }}
                </div>
            </div>
        </div>
    </div>
    <div class="blue-grey-bg">
        <!-- BREADCRUMB-->
        <section class="breadcrumb">
            <div class="container">
                <p>
                    <a href="/">Trang chủ</a>
                    <a href="/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    <a href="/{{ $post->category->slug }}/{{ $post->slug }}">{{ $post->title }}</a>
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
                            <h1>{{ $post->title }}</h1>
                            <div class="noi-dung-bai-viet">
                                <div class="noi-dung-bai-viet-mo-ta">
                                    {!! $post->body !!}
                                </div>
                            </div>
                            <div class="bai-viet-lien-quan">
                                <div class="bai-viet-lien-quan-title">
                                    Bài viết cùng chuyên mục
                                </div>
                                <div class="bai-viet-lien-quan-body">
                                    <div class="row">
                                        @if(count($related_post))
                                            @foreach($related_post as $item)
                                                <div class="col-md-6">
                                                    <div class="list-bai-viet-lien-quan">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="list-bai-viet-lien-quan-img">
                                                                    <a href="/{{ $post->category->slug }}/{{ $item->slug }}">
                                                                        @if($post->image)
                                                                            <img src="/storage/{{ $post->image }}" class="img-responsive" alt="{{ $item->title }}">
                                                                        @else
                                                                            <img src="http://via.placeholder.com/158x98" class="img-responsive" alt="{{ $item->title }}">
                                                                        @endif
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7 no-pad-left">
                                                                <div class="list-bai-viet-lien-quan-name">
                                                                    <a href="/{{ $post->category->slug }}/{{ $item->slug }}">
                                                                        {{ $item->title }}
                                                                    </a>
                                                                </div>
                                                                <p class="meta"><i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: MAIN CONTENT PAGE-->
    </div>
@endsection
