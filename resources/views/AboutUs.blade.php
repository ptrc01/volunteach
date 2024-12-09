@extends('layout')

@section('content')
        <section id="about-us" class="py-5">
        <!-- Header Section -->
            <div class="text-center mb-2">
                <h2 class="fw-bold">Empowering communities through the power of education and volunteerism.</h2>
            </div>
        </section>
        {{-- image/GIF --}}
        <img src="{{ asset('storage/images/aboutUs/aboutus.gif') }}" style="width: 100%; height: 90vh;" />
        <section class="py-5">
            <div class="container px-5">
                <!-- Header -->
                <div class="h2 fw-bolder text-center mb-4">Our Vision and Mission</div>
                <div class="row gx-5">
                    <!-- Vision -->
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">
                                <div class="badge bg-gradient rounded-pill mb-4 fs-6 px-3 py-2">Vision</div>
                                <div class="h5 card-title mb-3">A World of Equal Educational Opportunities</div>
                                <p class="card-text mb-0">To create a world where every child has access to quality education, guided by passionate volunteers who believe in the power of teaching.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Mission -->
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">
                                <div class="badge bg-gradient rounded-pill mb-4 fs-6 px-3 py-2">Mission</div>
                                <div class="h5 card-title mb-3">Connecting Volunteers to Communities</div>
                                <p class="card-text mb-0">To connect dedicated volunteers with underserved communities, fostering opportunities for learning, growth, and lasting impact through education.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header -->
            <div class="container px-5">
                <div class="h2 fw-bolder text-center mb-5">Our Values</div>
                <div class="row gx-5">
                    <!-- SDG 4: Quality Education -->
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="badge bg-gradient rounded-pill mb-4 fs-6 px-3 py-2">Quality Education</div>
                                    <img class="card-img-top mb-4" src="{{ asset('storage/images/aboutus/sdg4.png') }}" alt="..." />
                                </div>
                                <p class="card-text mb-0 text-center">Promoting inclusive and quality education for all and fostering lifelong learning opportunities. This platform connects volunteers with communities to ensure access to education for children in underserved areas.</p>
                            </div>
                        </div>
                    </div>
                    <!-- SDG 10: Reduced Inequalities -->
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="badge bg-gradient rounded-pill mb-4 fs-6 px-3 py-2">Reduced Inequalities</div>
                                    <img class="card-img-top mb-4" src="{{ asset('storage/images/aboutus/sdg10.png') }}" alt="..." />
                                </div>
                                <p class="card-text mb-0 text-center">Reducing inequalities within and among countries. By enabling access to education in marginalized areas, this platform helps bridge the gap in educational opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <!-- SDG 17: Partnerships for the Goals -->
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="badge bg-gradient rounded-pill mb-4 fs-6 px-3 py-2">Partnerships for the Goals</div>
                                    <img class="card-img-top mb-4" src="{{ asset('storage/images/aboutus/sdg17.png') }}" alt="..." />
                                </div>
                                <p class="card-text mb-0 text-center">Strengthening global partnerships for sustainable development. This platform serves as a collaborative hub for organizations, schools, and individuals to work together for better education access and quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
