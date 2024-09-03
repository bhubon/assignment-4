@extends('layouts.app')

@section('content')
    <main class="main">

        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>{{ $data['title'] }}</h2>
                <p>{{ $data['description'] }}</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    @foreach ($data['work_experience'] as $work_experience)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="resume-title">{{ $work_experience['title'] }}</h3>

                            <div class="resume-item pb-0">
                                <h4>{{ $work_experience['company'] }}</h4>
                                <p><em>{{ $work_experience['responsibilities']}}</em></p>
                                <ul>
                                    <li>{{ $work_experience['title'] }}</li>
                                    <li>{{ $work_experience['year'] }}</li>
                                    <li>{{ $work_experience['location'] }}</li>
                                </ul>
                            </div><!-- Edn Resume Item -->

                        </div>
                    @endforeach

                </div>

            </div>

        </section>
    </main>
@endsection
