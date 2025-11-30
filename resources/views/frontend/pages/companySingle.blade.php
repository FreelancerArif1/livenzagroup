@extends('frontend.layouts.app')
@section('title', 'Home | ' . Helper::getSettings('application_name') ?? 'Livenza Group')
@section('content')
    <main id="companysingle_page">
        <!-- Page Banner -->
        <div class="page-banner overlay">
            <picture class="media media-bg">
                <source media="(max-width: 575px)" srcset="/frontend/assets/img/banner/page-banner-575.jpg">
                <source media="(max-width: 991px)" srcset="/frontend/assets/img/banner/page-banner-991.jpg">
                @if ($slider?->video)
                    <video class="full-video" autoplay muted loop playsinline>
                        <source src="{{ $slider?->video }}" type="video/mp4">
                    </video>
                @else
                    <img src="{{ $slider?->image }}" width="1920" height="520" loading="eager" alt="Page Banner Image">
                @endif

            </picture>
            <div class="page-banner-content">
                <div class="container text-left">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="left_side_slider">
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
                                    <h4 class="heading text-20 fw-700 text-uppercase mb-2" data-aos="fade-up">
                                        <span class="heading_border">{{ $slider?->right_title_1 }}</span>
                                    </h4>
                                @endif
                                @if ($slider?->right_description_1)
                                    <div class="slider_main_paragraph" data-aos="fade-up" data-aos-delay="200">
                                        {!! $slider?->right_description_1 !!}
                                    </div>
                                @endif
                            </div>

                            <div class="right_bottom_slider">
                                @if ($slider?->right_title_2)
                                    <h4 class="heading text-20 fw-700 text-uppercase mb-2" data-aos="fade-up">
                                        <span class="heading_border">{{ $slider?->right_title_2 }}</span>
                                    </h4>
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

        @if ($company?->button_link)
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 button_container text-center">

                        <a href="{{ $company?->button_link }}" class="middlebutton">
                            visit website
                        </a>
                        {{-- <span class="triangle icon"></span> --}}
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="single_company_title">
                        {{ $company?->title }}
                        <div class="single_page_title_border"></div>
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <div class="container" id="single_page_description">
            <div class="row">
                <div class="col-md-12">
                    <div class="single_page_description">
                        <h4 class="heading text-20 fw-700 text-uppercase mb-4" data-aos="fade-up">
                            {{ $company?->sub_title }}
                        </h4>
                        <div data-aos="fade-up">
                            {!! $company?->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Featured Blog -->
        <div class="featured-blog section-padding">
            <div class="container">
                <div class="section-headings text-center">
                    <h3 class="heading text-40 fw-700 text-uppercase" data-aos="fade-up" data-aos-delay="50">
                        Portfolios
                    </h3>
                </div>
                <div class="section-content">
                    <div class="row product-grid justify-content-center">



                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-blog radius18">
                                <a class="card-blog-bottom" data-href="" aria-label="Blog details">
                                    <div class="media">
                                        <img src="/frontend/assets/img/blog/1.jpg" alt="blog image" width="1000"
                                            height="707" loading="lazy">
                                    </div>
                                    <div class="buttons">
                                        <div class="button button--primary">
                                            Read More
                                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-blog radius18">
                                <a class="card-blog-bottom" data-href="" aria-label="Blog details">
                                    <div class="media">
                                        <img src="/frontend/assets/img/blog/1.jpg" alt="blog image" width="1000"
                                            height="707" loading="lazy">
                                    </div>
                                    <div class="buttons">
                                        <div class="button button--primary">
                                            Read More
                                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-blog radius18">
                                <a class="card-blog-bottom" data-href="" aria-label="Blog details">
                                    <div class="media">
                                        <img src="/frontend/assets/img/blog/1.jpg" alt="blog image" width="1000"
                                            height="707" loading="lazy">
                                    </div>
                                    <div class="buttons">
                                        <div class="button button--primary">
                                            Read More
                                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-blog radius18">
                                <a class="card-blog-bottom" data-href="" aria-label="Blog details">
                                    <div class="media">
                                        <img src="/frontend/assets/img/blog/1.jpg" alt="blog image" width="1000"
                                            height="707" loading="lazy">
                                    </div>
                                    <div class="buttons">
                                        <div class="button button--primary">
                                            Read More
                                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-blog radius18">
                                <a class="card-blog-bottom" data-href="" aria-label="Blog details">
                                    <div class="media">
                                        <img src="/frontend/assets/img/blog/1.jpg" alt="blog image" width="1000"
                                            height="707" loading="lazy">
                                    </div>
                                    <div class="buttons">
                                        <div class="button button--primary">
                                            Read More
                                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-blog radius18">
                                <a class="card-blog-bottom" data-href="" aria-label="Blog details">
                                    <div class="media">
                                        <img src="/frontend/assets/img/blog/1.jpg" alt="blog image" width="1000"
                                            height="707" loading="lazy">
                                    </div>
                                    <div class="buttons">
                                        <div class="button button--primary">
                                            Read More
                                            <svg viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.16668 0.833333C2.16668 0.61232 2.25448 0.400358 2.41076 0.244078C2.56704 0.0877975 2.779 0 3.00001 0H9.66668C9.88769 0 10.0997 0.0877975 10.2559 0.244078C10.4122 0.400358 10.5 0.61232 10.5 0.833333V7.5C10.5 7.72101 10.4122 7.93297 10.2559 8.08926C10.0997 8.24554 9.88769 8.33333 9.66668 8.33333C9.44567 8.33333 9.2337 8.24554 9.07742 8.08926C8.92114 7.93297 8.83335 7.72101 8.83335 7.5V2.845L1.92251 9.75583C1.76535 9.90763 1.55484 9.99163 1.33635 9.98973C1.11785 9.98783 0.908839 9.90019 0.754332 9.74568C0.599825 9.59118 0.512184 9.38216 0.510285 9.16367C0.508387 8.94517 0.592382 8.73467 0.744181 8.5775L7.65501 1.66667H3.00001C2.779 1.66667 2.56704 1.57887 2.41076 1.42259C2.25448 1.26631 2.16668 1.05435 2.16668 0.833333Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <project-slider class="project-slider section-padding">
            <div class="container">
                <div class="section-headings headings-width text-center">
                    <h3 class="heading text-40 fw-700 text-uppercase" data-aos="fade-up" data-aos-delay="20">
                        Latest project
                    </h3>
                </div>
            </div>
            <div class="section-content">
                <div class="container-fluid slider-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details" data-href="">
                                    <img src="/frontend/assets/img/project/card/1.jpg" alt="project image" width="645"
                                        height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">Business Development</h2>
                                            <p class="text text-16">Digital marketing</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details" data-href="">
                                    <img src="/frontend/assets/img/project/card/2.jpg" alt="project image" width="645"
                                        height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">Plan Development</h2>
                                            <p class="text text-16">Consulting</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details" data-href="">
                                    <img src="/frontend/assets/img/project/card/3.jpg" alt="project image" width="645"
                                        height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">Risk Management</h2>
                                            <p class="text text-16">New Business</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details" data-href="">
                                    <img src="/frontend/assets/img/project/card/4.jpg" alt="project image" width="645"
                                        height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">Investment Idea</h2>
                                            <p class="text text-16">Digital marketing</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details" data-href="">
                                    <img src="/frontend/assets/img/project/card/5.jpg" alt="project image" width="645"
                                        height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">Business Consulting</h2>
                                            <p class="text text-16">Expert Growth</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details" data-href="">
                                    <img src="/frontend/assets/img/project/card/6.jpg" alt="project image" width="645"
                                        height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">Finance strategy</h2>
                                            <p class="text text-16">Digital marketing</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details" data-href="">
                                    <img src="/frontend/assets/img/project/card/7.jpg" alt="project image" width="645"
                                        height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">Sustainability Strategy</h2>
                                            <p class="text text-16">Development</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="card-project radius18" aria-label="project details" data-href="">
                                    <img src="/frontend/assets/img/project/card/8.jpg" alt="project image" width="645"
                                        height="690" loading="lazy">
                                    <div class="card-project-content-absolute">
                                        <div class="card-project-content">
                                            <h2 class="heading text-24">Business Development</h2>
                                            <p class="text text-16">Digital marketing</p>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="swiper-nav-border">
                        <div class="swiper-nav-inner">
                            <div class="swiper-button-prev">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </div>
                            <div class="swiper-button-next">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </project-slider>


        <section id="mapsection" class="section-padding"
            style="background-image: url(/frontend/assets/img/footer/footer-bg-large.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.431036385656!2d90.37907597533977!3d23.874329478586017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5003422f655%3A0xde3d4394732dca14!2sCANYON%20TOWER!5e0!3m2!1sen!2sbd!4v1764419918915!5m2!1sen!2sbd"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
