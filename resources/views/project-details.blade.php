@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Portfolio Details</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">

            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <img src="{{ $data['Screenshot'] }}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: {{ $data['Category'] }}</li>
                                <li><strong>Client</strong>: {{ $data['Client'] }}</li>
                                <li><strong>Project date</strong>: {{ $data['Project date'] }}</li>
                                <li><strong>Project URL</strong>: <a href="//{{ $data['Project URL'] }}" target="_blank">{{ $data['Project URL'] }}</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <p>{{ $data['Description'] }}</p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Portfolio Details Section -->

    </main>
@endsection
