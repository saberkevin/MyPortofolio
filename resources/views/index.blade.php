@extends('layouts.base')
@push('styles')
    <style>
    </style>
@endpush
@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{ asset('img/hero-background.jpg') }}" alt="" data-aos="fade-in" class="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Kevin Winarko</h2>
                <p>I'm <span class="typed"
                        data-typed-items="Web Developer, Freelancer">Web Developer</span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>
                    Experienced Programmer with years of experience in Programming and background in Backend Testing. Able to quickly learn and adapt with new things , quickly resolve problems and bugs, motivated to learn, grow and excel in programming.
                </p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('img/my-profile-avatar.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Web Developer</h2>
                        {{-- <p class="fst-italic py-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p> --}}
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May
                                            1995</span></li> --}}
                                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>www.example.com</span>
                                    </li>
                                    --}}
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> 
                                        <span>
                                            Pematangsiantar, Indonesia
                                        </span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>Bachelor of Computer Science</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>kevin.winarko@outlook.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> 
                                        <span>
                                            +62878-8360-9092
                                    </span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>27</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <p class="py-3">
                            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                            adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                            itaque neque.
                        </p> --}}
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        {{-- <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section --> --}}  

        <!-- Skills Section -->
        <section id="skills" class="skills section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                {{-- <p>30% is Beginner, 70% is Intermediate, 100% is Advanced</p> --}}
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>HTML</span> <i class="val">Advanced</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>CSS &amp; Javascript</span> <i class="val">Intermediate</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Databases &amp; SQL</span> <i class="val">Advanced</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>PHP/Laravel</span> <i class="val">Advanced</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Livewire/Git</span> <i class="val">Intermediate</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Java</span> <i class="val">Beginner</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        {{-- <h3 class="resume-title">Summary</h3>

                        <div class="resume-item pb-0">
                            <h4>Brandon Johnson</h4>
                            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing
                                    and developing user-centered digital/print marketing material from initial concept
                                    to final, polished deliverable.</em></p>
                            <ul>
                                <li>Portland par 127,Orlando, FL</li>
                                <li>(123) 456-7891</li>
                                <li>alice.barkley@example.com</li>
                            </ul>
                        </div><!-- Edn Resume Item --> --}}

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachelor's degree - Information Technology</h4>
                            <h5>2016-2020</h5>
                            <p><em>Universitas Bina Nusantara, DKI Jakarta, ID</em></p>
                            <p>
                                Courses: C, C++, MSSQL, OPENGL, Java, C#, Laravel, HTML, CSS, JS, PHP 
                            </p>
                            <p>
                                Projects: Blue Laundry(Java), dIVForum (Laravel)
                            </p>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>High School - Regular Science</h4>
                            <h5>2013 - 2016</h5>
                            <p><em>SMA Kristen Kalam Kudus, Pematangsiantar, ID</em></p>
                            <p>
                                Courses: C++, Pascal, Game Maker
                            </p>
                        </div><!-- Edn Resume Item -->

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>IT Staff</h4>
                            <h5>Mar 2025 - Present</h5>
                            <p><em>Sucofindo, DKI Jakarta, ID- Onsite </em></p>
                            <ul>
                                <li>Tools: Laravel, MySQL, Git</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>Software Engineer</h4>
                            <h5>Jan 2023 - Feb 2025</h5>
                            <p><em>Suitmedia Digital Agency, DKI Jakarta, ID - Remote</em></p>
                            <ul>
                                <li>Tools: Laravel, MySQL, PostgreSQL, Livewire, Postman, Git, ActiveMQ</li>
                                <li>Projects: IDX RDIS, e-GRC SIER, Supermath</li>
                                <li>Integrate frontend with backend according to requirement given by system analyst (From wireframe or analyzed requirements)</li>
                                <li>Build CMS Page using frontend design template with its integration to backend</li>
                                <li>Create Scheduler for cases that need automation and email/database notification using Laravel framework</li>
                                <li>Maintenance and bugfixing while on development and after project live</li>
                                <li>Develop API for project that is not Monolith using Laravel</li>
                                <li>Actively communicate with system analyst, project manager and other vendor IT representative for requirement and problem that arise when on development and after project live</li>
                            </ul>
                        </div><!-- Edn Resume Item -->
                        <div class="resume-item">
                            <h4>Programmer</h4>
                            <h5>Oct 2021 - Oct 2022</h5>
                            <p><em>Bina Nusantara IT Division, DKI Jakarta, ID - Hybrid</em></p>
                            <ul>
                                <li>Tools: Postman, Salesforce CRM, 3Dolphin CRM, MVEL, Java, Apex Programming, SOQL</li>
                                <li>Projects: Binus Salesforce, Binus Whatsapp Chatbot</li>
                                <li>Develop API for other vendor to Access Salesforce CRM</li>
                                <li>Develop controller, unit test and Visualforce page (A frontend page for user to interact)</li>
                                <li>Query with SOQL to trace cases or for development, creating Object (like Table)</li>
                                <li>Create Scheduler for cases that need automation</li>
                                <li>Maintaning and bugfixing code that is related to Binus Whatsapp Chatbot</li>
                                <li>Develop Chatbot on Whatsapp based on Binus Journey using dialog and process flow with MVEL</li>
                                <li>Using Postman to test and run API from internal development and vendor API</li>
                                <li>Actively contact with System Analyst and other programmer to fix new found bug and problem that arise while in development or day to day case</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Associate Software Development Engineer in Test</h4>
                            <h5>Jun 2020 - Jun 2021</h5>
                            <p><em>Dana Indonesia, DKI Jakarta, ID - Hybrid</em></p>
                            <ul>
                                <li>Tools: Java, ITest, YAML, TestNG, JUnit, Git</li>
                                <li>Create Test Analysis, Test Script, Documentation and Testing multiple project for one sprint that mainly last one month with testing time usually one week</li>
                                <li>Actively contact with developer and project manager to fix new found bug and problem that arise while in development</li>
                                <li>Handling and maintaining regression for past Test Script that may failed with active continuous development, we strive to have more than 90% pass rate</li>
                                <li>Check Log and handling On-Duty Cases on Online Environment when got assigned</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>DanaApprenTech - SDET BE</h4>
                            <h5>Mar 2020 - Jun 2020</h5>
                            <p><em>Dana Indonesia, DKI Jakarta, ID - Hybrid</em></p>
                            <ul>
                                <li>Tools: Java, Git, TestNG, JMeter</li>
                                <li>Trained to became Backend SDET as fulltime employee</li>
                                <li>Join Bootcamp alike that has test and homework for fulltime employee selection</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Programmer</h4>
                            <h5>Mar 2018 - Feb 2020</h5>
                            <p><em>Bina Nusantara IT Division, DKI Jakarta, ID - Onsite</em></p>
                            <ul>
                                <li>Tools: Codeigniter, MSSQL, Peoplesoft, OracleSQL, PHP, HTML, CSS, JS</li>
                                <li>Projects: Binusmaya 5, Binus Campus Solution (BCS)</li>        
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Associate Member Developer</h4>
                            <h5>Mar 2017 - Feb 2018</h5>
                            <p><em>Bina Nusantara IT Division, DKI Jakarta, ID - Onsite</em></p>
                            <ul>
                                <li>Tools: Laravel, AngularJS 1, PostgreSQL, PHP, HTML, CSS, JS</li>
                                <li>Projects: Binus School Bekasi, Puhua</li>          
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        {{-- <li data-filter=".filter-app">App</li> --}}
                        {{-- <li data-filter=".filter-product">Product</li>
                        <li data-filter=".filter-branding">Branding</li>
                        <li data-filter=".filter-books">Books</li> --}}
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/rdis.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>IDX RDIS</h4>
                                    <p>CMS Page used by user RDIS mainly for IDX events, monthly report, visits, etc</p>
                                    <a href="{{ asset('img/portfolio/rdis.jpg') }}" title="IDX RDIS"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"
                                        style="margin-left:30px;"><i
                                            class="bi bi-zoom-in"></i></a>
                                    {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a> --}}
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/sier.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Enterprise Governance, Risk and Compliance (EGRC) for PT. SIER</h4>
                                    <p>a web used by PT.SIER user for Financial Risk Management</p>
                                    <a href="{{ asset('img/portfolio/sier.jpg') }}" title="EGRC"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"
                                        style="margin-left:30px;"><i
                                            class="bi bi-zoom-in"></i></a>
                                    {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/binus.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Binus Whatsapp Chatbot</h4>
                                    <p>a Whatsapp Chatbot that is used by student or alumni of Binus for communication related to Student Service Center</p>
                                    <a href="{{ asset('img/portfolio/binus.jpg') }}" title="Binus Whatsapp Chatbot"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"
                                        style="margin-left:30px;"><i
                                            class="bi bi-zoom-in"></i></a>
                                    {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/salesforce.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Binus Salesforce CRM</h4>
                                    <p>Salesforce SaaS that is used by Binus for managing data and implementing easy page and API</p>
                                    <a href="{{ asset('img/portfolio/salesforce.jpg') }}" title="Binus Salesforce CRM"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"
                                        style="margin-left:30px;"><i
                                            class="bi bi-zoom-in"></i></a>
                                    {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/bcs.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Binus Campus Solution</h4>
                                    <p>Oracle SaaS built with Peoplesoft that is used by student and staff to Manage student related data with OracleSQL as database engine</p>
                                    <a href="{{ asset('img/portfolio/bcs.jpg') }}" title="Binus Campus Solution"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"
                                        style="margin-left:30px;"><i
                                            class="bi bi-zoom-in"></i></a>
                                    {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/bm5.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Binusmaya 5</h4>
                                    <p>a web that is used mainly by Binus student for day to day activities.</p>
                                    <a href="{{ asset('img/portfolio/bm5.png') }}" title="Binusmaya 5"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"
                                        style="margin-left:30px;"><i
                                            class="bi bi-zoom-in"></i></a>
                                    {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/binus_school_bekasi.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Binus School Bekasi</h4>
                                    <p>a CMS page that is used by teacher to manage data related to Binus School Bekasi student.</p>
                                    <a href="{{ asset('img/portfolio/binus_school_bekasi.jpg') }}" title="Binus School Bekasi"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"
                                        style="margin-left:30px;"><i
                                            class="bi bi-zoom-in"></i></a>
                                    {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/puhua.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Puhua School</h4>
                                    <p>a CMS page that is used by teacher to manage data related to Puhua School student.</p>
                                    <a href="{{ asset('img/portfolio/puhua.png') }}" title="Puhua School"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"
                                        style="margin-left:30px;"><i
                                            class="bi bi-zoom-in"></i></a>
                                    {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/product-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('img/portfolio/product-1.jpg') }}" title="Product 1"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/branding-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('img/portfolio/branding-1.jpg') }}" title="Branding 1"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/books-1.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('img/portfolio/books-1.jpg') }}" title="Branding 1"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item --> --}}

                        {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/product-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('img/portfolio/product-2.jpg') }}" title="Product 2"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/branding-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('img/portfolio/branding-2.jpg') }}" title="Branding 2"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/books-2.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('img/portfolio/books-2.jpg') }}" title="Branding 2"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item --> --}}

                        {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/product-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('img/portfolio/product-3.jpg') }}" title="Product 3"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/branding-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('img/portfolio/branding-3.jpg') }}" title="Branding 2"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('img/portfolio/books-3.jpg') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ asset('img/portfolio/books-3.jpg') }}" title="Branding 3"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item --> --}}

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Services Section -->
        {{-- <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Lorem Ipsum</a>
                            </h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Dolor Sitema</a>
                            </h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Sed ut
                                    perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Magni
                                    Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Nemo Enim</a>
                            </h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Eiusmod
                                    Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section --> --}}

        <!-- Testimonials Section -->
        {{-- <section id="testimonials" class="testimonials section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                        quis sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore
                                        illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                        nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section --> --}}

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Sutoyo 48, Dwikora, Siantar Barat, Pematangsiantar, Indonesia 21118</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Phone</h3>
                                    <p>+62 878-8360-9092</p>
                                </div>
                            </div><!-- End Info Item --> 

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>kevin.winarko@outlook.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.503272770219!2d99.06432847391038!3d2.9577595970184345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031845d2022b981%3A0x91d937041d41d715!2sToko%20Sharkin!5e0!3m2!1sid!2sid!4v1741330314404!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <form action="{{ route('contact-us') }}" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control"
                                        required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email-field"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                </div>

                                {!! NoCaptcha::display() !!}

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>
@endsection

@push('scripts')
    {!! NoCaptcha::renderJs() !!}
@endpush
