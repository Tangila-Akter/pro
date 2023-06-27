@extends('frontend.master')
@section('content')
<!-- About Section -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>
        @foreach($about as $about)
        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset('frontend/assets/img/profile-img.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{$about->name}}</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore
                    magna aliqua.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                <span>{{$about->birthday}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                <span>{{$about->website}}</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                <span>{{$about->phone}}</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about->age}}</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                <span></span>{{$about->degree}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                <span>{{$about->email}}</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                <span>{{$about->freelance}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <p>
                    Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci
                    omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                    Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque
                    neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni
                    laudantium dolores.
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- End About Section -->

<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container">

        <div class="section-title">
            <h2>Facts</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">
            @foreach($fact as $fact)
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="{{$fact->purecounter}}"
                        data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>{{$fact->header}}</strong><br> {{$fact->text}}</p>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>
<!-- End Facts Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Skills</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6" data-aos="fade-up">
                @foreach($skill as $skill)
                <div class="progress">
                    <span class="skill">{{$skill->name}} <i class="val">{{$skill->percentage}}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percentage}}"
                            aria-valuemin="0" aria-valuemax="{{$skill->percentage}}"></div>
                    </div>
                </div>
                @endforeach


            </div>

        </div>

    </div>
</section>
<!-- End Skills Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="resume-title">Sumary</h3>
                @foreach($summary as $summary)
                <div class="resume-item pb-0">
                    <h4>{{$summary->name}}</h4>
                    <p><em>{{$summary->text}}</em></p>
                    <ul>
                        <li>{{$summary->address}}</li>
                        <li>{{$summary->phone}}</li>
                    </ul>
                </div>
                @endforeach
                <h3 class="resume-title">Education</h3>
                @foreach($education as $education)
                <div class="resume-item">
                    <h4>{{$education->name}}</h4>
                    <h5>{{$education->dateFrom}} / {{$education->dateto}}</h5>
                    <p><em>{{$education->address}}</em></p>
                    <p>{{$education->text}}</p>
                </div>
                @endforeach

            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Professional Experience</h3>
                @foreach($experience as $experience)
                <div class="resume-item">
                    <h4>{{$experience->title}}</h4>
                    <h5>{{$experience->dateFrom}} / {{$experience->dateto}}</h5>
                    <p><em>{{$experience->address}} </em></p>
                    <p>
                        {{$experience->text}}
                    </p>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
<!-- End Resume Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg')}}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg')}}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg')}}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg')}}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-5.jpg')}}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-6.jpg')}}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-7.jpg')}}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-8.jpg')}}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-9.jpg')}}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Portfolio Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            @foreach($service as $service)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="{{$service->icon}}"></i></div>
                <h4 class="title"><a href="">{{$service->title}}</a></h4>
                <p class="description">{{$service->text}}</p>
            </div>
            @endforeach
            <!-- <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat tarad limino ata</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-binoculars"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                    soluta nobis est eligendi</p>
            </div> -->
        </div>

    </div>
</section>
<!-- End Services Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($testimonial as $testimonial)
                <div class="swiper-slide">
                    <div class="testimonial-item" data-aos="fade-up">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$testimonial->text}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ asset('frontend/assets/img/testimonials/testimonials-1.jpg')}}"
                            class="testimonial-img" alt="">
                        <h3>{{$testimonial->name}}</h3>
                        <h4>{{$testimonial->title}}</h4>
                    </div>
                </div>
                <!-- End testimonial item -->
                @endforeach


            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
<!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                @foreach($about1 as $about1)
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>{{$about1->location}}</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{$about1->email}}</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>{{$about1->phone}}</p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>
                @endforeach
            </div>

            <div
                class="col-lg-7 mt-5 pt-5 pl-5 pr-5 mb-5 mt-lg-0 d-flex align-items-stretch card shadow p-3 mb-5 bg-white rounded">

                <form action="{{ url('/upload_contact') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 my-3">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6 my-3">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="text" rows="10" required></textarea>
                    </div>
                    <div class="my-3 mt-5 ">
                        @if(session()->has('message'))

                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                        @endif

                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary mt-5">Send Message</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>

<!-- End Contact Section -->
@endsection