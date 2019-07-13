@extends('frontend.layouts.master')
@section('slider')
    <div class="owl-carousel owl-theme">
        @foreach($slides as $slide)
            <div class="item"><img src="/storage/{{ $slide->image }}" alt="{{ $slide->name }}" /></div>
        @endforeach
    </div>
@endsection
@section('content')
    <div class="section services white-bg">
        <div class="container">
            <div class="section-title section-title-underline-1 section-title-style-1 section-title-color-grey section-title-center marbt-1">Dịch vụ của chúng tôi</div>
            <div class="row row-flex">
                @foreach($services as $service)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service">
                            <a class="service-img" href="">
                                <img src="/storage/{{ $service->image }}" alt="{{ $service->name }}">
                            </a>
                            <div class="service-content">
                                <div class="title">
                                    <a href="">{{ $service->name }}</a>
                                </div>
                                <p class="des">{{ $service->desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <section class="testimonials-wrapper">
        <div class="parallax parallax-testi1">
            <div class="container">
                <div class="carousel-wrapper">
                    <div class="carousel">
                        <div class="testimonials owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transition: all 0.25s ease 0s; width: 4620px; transform: translate3d(-1540px, 0px, 0px);">
                                    @foreach($testimonials as $item)
                                    <div class="owl-item cloned" style="width: 770px;">
                                        <div class="testimonial">
                                            <p class="tes-content">{{ $item->content }}</p>
                                            <p class="author">{{ $item->author }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots disabled"></div></div>
                        <div class="carousel-nav">
                            <span class="prev-btn fa fa-angle-left"></span>
                            <span class="next-btn fa fa-angle-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects projects-2 white-bg">
        <div class="container">
            <div class="section-title section-title-underline-1 section-title-style-1 section-title-color-grey section-title-center marbt-1">Tin tức mới</div>
            <div class="row row-flex">
                @foreach($posts as $post)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="project project-1">
                            <a class="project-img" href="">
                                <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}">
                            </a>
                            <div class="project-info">
                                <a class="aubtn rmbtn" href="">Xem chi tiết</a>
                            </div>
                        </div>
                        <div class="project-caption">
                            <div class="project-caption-name">
                                <a href="">{{ $post->title }}</a>
                            </div>
                            <p class="meta"><i class="fa fa-calendar"></i> {{ $post->created_at->format('d/m/Y') }}</p>
                            <div class="project-caption-description">{{ $post->excerpt }}</div>
                        </div>
                        <div class="xem-them">
                            <a href="">Xem chi tiết</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
@push('js-stack')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            items: 1,
            autoplay:true,
            autoplayTimeout:3000,
        })
    </script>
@endpush