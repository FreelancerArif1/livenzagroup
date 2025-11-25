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
                            <img src="/frontend/assets/img/project/card/22.jpg" alt="project image" width="645"
                                height="690" loading="lazy">
                            <div class="card-project-content-absolute">
                                <div class="card-project-content">
                                    <h2 class="heading text-24">Automotive - EV Mobility</h2>
                                    <p class="text text-16">Noor Autos , Official BYD Dealership</p>
                                </div>
                            </div>

                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="300">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
                            <img src="/frontend/assets/img/project/card/33.jpg" alt="project image" width="645"
                                height="690" loading="lazy">
                            <div class="card-project-content-absolute">
                                <div class="card-project-content">
                                    <h2 class="heading text-24">RMG - Packaging Manufacturing</h2>
                                    <p class="text text-16">Expo Accessories Ltd</p>
                                </div>
                            </div>

                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="400">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
                            <img src="/frontend/assets/img/project/card/44.jpg" alt="project image" width="645"
                                height="690" loading="lazy">
                            <div class="card-project-content-absolute">
                                <div class="card-project-content">
                                    <h2 class="heading text-24">Clean Energy & Industrial Solutions BD</h2>
                                    <p class="text text-16">Greenery Energy Solution Ltd ( Bangladesh )</p>
                                </div>
                            </div>

                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="100">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
                            <img src="/frontend/assets/img/project/card/55.jpg" alt="project image" width="645"
                                height="690" loading="lazy">
                            <div class="card-project-content-absolute">
                                <div class="card-project-content">
                                    <h2 class="heading text-24">Clean Energy & Industrial Solutions Canada</h2>
                                    <p class="text text-16">Greenery Import Export Ltd ( Canada )</p>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="300">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
                            <img src="/frontend/assets/img/project/card/66.jpg" alt="project image" width="645"
                                height="690" loading="lazy">
                            <div class="card-project-content-absolute">
                                <div class="card-project-content">
                                    <h2 class="heading text-24">Industrial Retail - Worker-Centric Stores</h2>
                                    <p class="text text-16">Greenery Mart</p>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-4 single_company_box mb-3" data-aos="fade-up"
                        data-aos-delay="300">
                        <a class="card-project radius18" aria-label="project details" href="project-details.html">
                            <img src="/frontend/assets/img/project/card/77.jpg" alt="project image" width="645"
                                height="690" loading="lazy">
                            <div class="card-project-content-absolute">
                                <div class="card-project-content">
                                    <h2 class="heading text-24">Pharmaceutical - Industrial Plastics</h2>
                                    <p class="text text-16">Novelty Bangladesh Ltd</p>
                                </div>
                            </div>

                        </a>
                    </div>

                </div>

            </div>
        </div>
    </main>
@endsection
