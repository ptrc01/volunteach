@extends('layout')
@section('content')
    <main class="flex-shrink-0">
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5">
                <h1 class="fw-bolder fs-5 mb-4">Volunteach</h1>
                <div class="card border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-xl-5 py-lg-5">
                                <div class="p-4 p-md-5">
                                    <div class="h2 fw-bolder">Join Us</div>
                                    <p>Give Back Through Teaching, Volunteer Today!</p>
                                    <!-- Sign Up Button -->
                                    <button class="btn btn-primary btn-sm px-4 py-2 border-2 rounded-pill">
                                        Sign Up
                                    </button>
                                    <!-- Login Button -->
                                    <button class="btn btn-outline-primary btn-sm px-4 py-2 border-2 rounded-pill">
                                        Login
                                    </button>
                                </div>
                            </div>
                            {{-- Image --}}
                            <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('images/home/1.png')"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg-light">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-xl-8">
                        <h2 class="fw-bolder fs-5 mb-4">News</h2>
                        <!-- News item-->
                        <div class="mb-4">
                            <div class="small text-muted">August 23, 2024</div>
                            <a class="link-dark" href="#!"><h3>Building the Nation's Future: The Role of Education Volunteers in Driving Change in Indonesia</h3></a>
                        </div>
                        <!-- News item-->
                        <div class="mb-5">
                            <div class="small text-muted">June 5, 2024</div>
                            <a class="link-dark" href="#!"><h3>Teachers: Heroes Behind the Classroom Scenes</h3></a>
                        </div>
                        <!-- News item-->
                        <div class="mb-5">
                            <div class="small text-muted">May 21, 2024</div>
                            <a class="link-dark" href="#!"><h3>Service to the Nation: Stories of Education Volunteers Dedication in Areas with Limited Access</h3></a>
                        </div>
                        <div class="text-end mb-5 mb-xl-0">
                            <a class="text-decoration-none" href="#!">
                                More news
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card border-0 h-100">
                            <div class="card-body p-4">
                                <div class="d-flex h-100 align-items-center justify-content-center">
                                    <div class="text-center">
                                        <div class="h6 fw-bolder">Contact</div>
                                        <p class="text-muted mb-4">
                                            For press inquiries, email us at
                                            <br />
                                            <a href="#!">volunteach@gmail.com</a>
                                        </p>
                                        <div class="h6 fw-bolder">Follow us</div>
                                        <a class="fs-5 px-2 link-dark" href="https://www.x.com"><i class="bi-twitter"></i></a>
                                        <a class="fs-5 px-2 link-dark" href="https://www.facebook.com"><i class="bi-facebook"></i></a>
                                        <a class="fs-5 px-2 link-dark" href="https://www.linkedin.com"><i class="bi-linkedin"></i></a>
                                        <a class="fs-5 px-2 link-dark" href="https://www.youtube.com"><i class="bi-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5">
                <h2 class="fw-bolder fs-5 mb-4">Featured Stories</h2>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="images/home/2.png" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Denpasar, Bali</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h5 card-title mb-3">From Passion to Action: My Experience as a Volunteer Teacher</div></a>
                                <p class="card-text mb-0">This journey has sharpened my teaching skills and strengthened my commitment to making an impact.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                            <img src="images/home/profile1.png" alt="Profile Picture" 
                                            style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%; margin-right: 10px;" />
                                        <div class="small">
                                            <div class="fw-bold">Carloz Sainz</div>
                                            <div class="text-muted">March 20, 2024 &middot; 6 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="images/home/3.png" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Bandung, Jawa Barat</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h5 card-title mb-3">Changing Lives, One Lesson at a Time</div></a>
                                <p class="card-text mb-0">Each lesson I teach brings a new opportunity to inspire and empower students, making a lasting difference in their lives and my own.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="images/home/profile2.png" alt="Profile Picture" 
                                            style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%; margin-right: 10px;" />
                                        <div class="small">
                                            <div class="fw-bold">Tom Cruise</div>
                                            <div class="text-muted">July 23, 2024 &middot; 4 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="images/home/4.png" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Malang, Jawa Timur</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h5 card-title mb-3">From Volunteer to Mentor: A Journey of Empowerment</div></a>
                                <p class="card-text mb-0">What started as volunteering grew into a mentor role, empowering students to reach their full potential.</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="images/home/profile3.png" alt="Profile Picture" 
                                            style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%; margin-right: 10px;" />
                                        <div class="small">
                                            <div class="fw-bold">Theo James</div>
                                            <div class="text-muted">September 23, 2024 &middot; 10 min read</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end mb-5 mb-xl-0">
                    <a class="text-decoration-none" href="#!">
                        More stories
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
@endsection