@extends('frontend.layouts.app')
@section('title', 'Home | ' . Helper::getSettings('application_name') ?? 'Livenza Group')
@section('content')
    <main id="about_page">
        <div class="page-banner overlay">
            <div class="media media-bg">
                @if ($slider?->video)
                    <video class="full-video" autoplay muted loop playsinline>
                        <source src="{{ $slider?->video }}" type="video/mp4">
                    </video>
                @elseif($slider?->youtube_video)
                    <iframe class="full-video"
                        src="{{ $embedUrl }}?autoplay=1&mute=1&loop=1&playlist={{ $videoId }}&controls=0&showinfo=0&modestbranding=1"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                @else
                    <img src="{{ $slider?->image }}" width="1920" height="520" loading="eager" alt="Page Banner Image">
                @endif

            </div>
            <div class="page-banner-content">
                <div class="container text-left">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="left_side_slider">
                                <div class="company_logo">
                                    <img src="{{ $slider?->company_logo }}" height="auto" alt="">
                                </div>
                                <h3 class="heading text-40 fw-700 text-uppercase mb-4" data-aos="fade-up">
                                    {{ $slider?->title }}
                                </h3>

                                <div class="slider_main_paragraph" data-aos="fade-up" data-aos-delay="200">
                                    {!! $slider?->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3">
                            <div class="right_top_slider">
                                @if ($slider?->right_title_1)
                                    <h6 class="heading text-20 fw-700 text-uppercase mb-2" data-aos="fade-up">
                                        <span class="heading_border">{{ $slider?->right_title_1 }}</span>
                                    </h6>
                                @endif
                                @if ($slider?->right_description_1)
                                    <div class="slider_main_paragraph" data-aos="fade-up" data-aos-delay="200">
                                        {!! $slider?->right_description_1 !!}
                                    </div>
                                @endif
                            </div>

                            <div class="right_bottom_slider">
                                @if ($slider?->right_title_2)
                                    <h6 class="heading text-20 fw-700 text-uppercase mb-2" data-aos="fade-up">
                                        <span class="heading_border">{{ $slider?->right_title_2 }}</span>
                                    </h6>
                                @endif
                                @if ($slider?->right_description_2)
                                    <div class="slider_main_paragraph" data-aos="fade-up" data-aos-delay="200">
                                        {!! $slider?->right_description_2 !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
