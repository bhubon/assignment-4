@extends('layouts.app')

@section('content')
    <main class="main">
        <section id="portfolio" class="portfolio section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>{{ $data['title'] }}</h2>
                <p>{{ $data['description'] }}</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($data['Categories'] as $category)
                            @php
                                $string = strtolower($category);
                                $string = str_replace(' ', '-', $string);
                            @endphp
                            <li data-filter=".{{ $string }}">{{ $category }}</li>
                        @endforeach
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($data['Projects'] as $project)
                            @php
                                $string = strtolower($project['Category']);
                                $string = str_replace(' ', '-', $string);

                                $words = explode(' ', $project['Description']);
                                // Limit the number of words
                                $words = array_slice($words, 0, 10);
                                // Join the words back into a string
                                $limitedText = implode(' ', $words);
                            @endphp
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $string }}">
                                <div class="portfolio-content h-100">
                                    <img src="{{ $project['Screenshot'] }}" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $project['Category'] }}</h4>
                                        <p>{{ $limitedText }}</p>
                                        <a href="{{ route('project-details',$project['id']) }}" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section>
    </main>
@endsection
