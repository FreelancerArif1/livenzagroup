@extends('frontend.layouts.app')
@section('title', 'Home | ' . Helper::getSettings('application_name') ?? 'Livenza Group')
@section('content')
    <main id="homepage" style="background-image: url(/frontend/assets/img/footer/footer-bg-larged.jpg)">

        <!-- Projects -->
        <div class="page-projects pt-5 pb-5">
            <div class="container-fluid">
                <div class="row product-grid">

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
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
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="300">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
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
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="400">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
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
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="100">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
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

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="300">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
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

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="300">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
                            <img src="/frontend/assets/img/project/card/6.jpeg" alt="project image" width="645"
                                height="690" loading="lazy">
                            <div class="card-project-content-absolute">
                                <div class="card-project-content">
                                    <h2 class="heading text-24">Sustainability Strategy</h2>
                                    <p class="text text-16">Development</p>
                                </div>
                            </div>

                        </a>
                    </div>

                </div>

            </div>
        </div>
    </main>
@endsection
