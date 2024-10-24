<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Care</title>
    <link rel="icon" href="./src/assets/image/dog.svg">

    <!-- Bootstrap Core CSS  -->
    <link rel="stylesheet" href="./src/assets/css/bootstrap.min.css">
    <!-- carousel-->
    <link rel="stylesheet" href="./src/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./src/assets/css/owl.theme.default.min.css">
    <!-- design system css -->
    <link rel="stylesheet" href="./src/assets/css/design_system.css"  id="pagestyle" type="text/css">
    <!-- custom css  -->
    <link rel="stylesheet" href="./src/assets/css/pages.css">
</head>
<body>


    <!-- top nav start -->
    <div id="nav-top" class="bg-2" data-aos="fade-down" data-aos-duration="600">
        <div class="container">
            <div class="row nav-top">
                <div class="col-6 d-flex">
                    <div class="me-4">
                        <a href="tel:+8801234567890">
                            <span class="call  primary-text center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone icon-color"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                &nbsp; Call: +8801234567890</span>
                        </a>
                    </div>
                    <div>
                        <a href="mail-to:info@dreamarray.com">
                            <span class="mail primary-text center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail icon-color"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                &nbsp; E-mail: info@dreamarray.com</span>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-end">
                        <span class="location primary-text center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin icon-color"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            &nbsp; Monipuri Para, Farmgate, Dhaka</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top nav end -->

    <!-- nav section starts here -->
    <div class="top-nav bg-white navbar-area" data-aos="fade" data-aos-duration="600">
        <div class="container">
            <nav class="navbar navbar-expand-lg py-3 p-0 site-navbar">
                <!-- Logo -->
                <a class="navbar-brand m-0" href="index.html">
                    <img src="./src/assets/image/Logo.svg" alt="...">
                </a>
                <!-- Navbar toggle -->
                <button
                    class="navbar-toggler nav-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span>
                    </span>
                </button>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Nav -->
                    <div class="navbar-nav aligns-center ms-lg-auto">
                        <ul class="p-0 d-flex">
                            <li class="links home">
                                <a class="nav-item nav-link text-md" href="index.html" aria-current="page">Home</a>
                            </li>
                            <li class="links about-us">
                                <a class="nav-item nav-link text-md" href="about-us.html" aria-current="page">About Us</a>
                            </li>
                            <li class="links service">
                                <a class="nav-item nav-link text-md" href="service.html" aria-current="page">Service</a>
                            </li>
                            <li class="links blogs active">
                                <a class="nav-item nav-link text-md" href="our-blogs.html" aria-current="page">Blogs</a>
                            </li>
                            <li class="links contact-us">
                                <a class="nav-item nav-link text-md" href="contact-us.html" aria-current="page">Contact Us</a>
                            </li>
                            <li class="sign-in p-0">
                                <button class="primary-button center gap-2 rounded-pill">
                                    <span class="connect">Sign in / Sign up</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- nav section end here -->

    <!-- color change  -->
    <div class="container-fluid">
        <button class="change-color" onclick="colorButton()">colors</button>

        <div class="colors-theme dropdown-content"  id="color-options" >
            <div class="contaiiner">
                <div class="color-container">
                    <button class="bg-blue mt-5" onclick="swapStyleSheet('./src/assets/css/colors/ds_bluish_color.css')"> </button>
                    <button class="bg-green" onclick="swapStyleSheet('./src/assets/css/design_system.css')" > </button>
                    <button class="bg-yellow" onclick="swapStyleSheet('./src/assets/css/colors/ds_yelloish_color.css')" > </button>
                    <button class="bg-orange" onclick="swapStyleSheet('./src/assets/css/colors/ds_orange_color.css')" > </button>
                </div>
            </div>
        </div>
    </div>

    <!-- hero section start  -->
    <section class="hero our-blogs-bg common-bg" data-aos="fade" data-aos-duration="600">
        <div class="hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 align-center my-auto hero-headings" data-aos="fade" data-aos-duration="2600">
                        <h2 class="text-paw">Our Blogs</h2>
                        <div class="d-flex text-lg">
                            <a href="index.html">Home</a>&nbsp;/&nbsp;
                            <span>Blog</span>
                        </div>
                    </div>
                    <div class="col-md-4 float-end ms-auto">
                        <div class="image-container hide-sm" data-aos="fade-up" data-aos-duration="1600">
                            <img src="./src/assets/image/content-image/blog-dog.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero secton end  -->

    <!-- blogs section start  -->
    <section class="specialist blog blog-cards py-100" data-aos="fade" data-aos-duration="900">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="text-center">
                        <img class="image rounded-2" src="./src/assets/image/content-image/bd-main.webp" alt="">
                    </div>
                    <div class="blog-heading">
                        <h3 class="primary-text">Give mouth cancer sufferers a voice on World Cancer Day</h3>
                        <div class="d-flex justify-content-between">
                            <span class="text-md">Publish By: Dr. Jack Jacob</span>
                            <div class="d-flex">
                                <div class="date">
                                    <i class="fa-solid fa-calendar-days ms-3 me-1" style="color: #4a71b5;"></i>
                                    <span>3.11.2023</span>
                                </div>
                                <div class="like">
                                    <i class="fa-solid fa-thumbs-up ms-3 me-1" style="color: #4a71b5;"></i>
                                    <span>3.2k</span>
                                </div>
                                <div class="comment">
                                    <i class="fa-solid fa-message ms-3 me-1" style="color: #4a71b5;"></i>
                                    <span>1.1k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-para">
                        <p class="text-md">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like</p>
                        <p class="text-md">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <div class="double-image d-flex justify-content-between gap-3">
                            <div class="w-50">
                                <img class="image rounded-2" src="./src/assets/image/content-image/bd-1.webp" alt="">
                            </div>
                            <div class="w-50">
                                <img class="image rounded-2" src="./src/assets/image/content-image/bd-2.webp" alt="">
                            </div>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>

                    <div>
                        <div class="post-tags d-flex">
                            <h5 class="primary-text">Post Tags:</h5>
                            <a>Cardiology,</a>
                            <a>Mouth Cancer,</a>
                            <a>Cancer,</a>
                        </div>
                        <h4>Recent Comments</h4>
                        <div class="d-flex recent-cmnt">
                            <div class="image-sm">
                                <img class="image-sm rounded-2" src="./src/assets/image/content-image/bd-pro.webp" alt="">
                            </div>
                            <div class="my-auto">
                                <h5 class="name">Jakob Jamaica</h5>
                                <p>"Thank you for providing such a comprehensive and informative healthcare website.</p>
                            </div>
                        </div>
                        <div class="ms-5 d-flex mt-4 cmnt-reply">
                            <div class="image-sm rounded-2">
                                <img class="image-sm rounded-2" src="./src/assets/image/content-image/bd-cmnt.webp" alt="">
                            </div>
                            <div class="name">
                                <h5 class="name mt-3">Dr. Jack Jacob</h5>
                                <a>Author</a>
                                <p class="mt-3 mb-2">"Thank you so much."</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-48">
                        <div class="col-sm-12">
                            <div class="row m-0">
                                <div class="col-12">
                                    <h2 class="mb-48">Leave A Comment...</h2>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <input type="text" class="form-control" placeholder="Your E-mail">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Subject..">
                                </div>
                                <div class="col-12">
                                    <textarea  id="comments" class="form-control" name="comment" placeholder="Your messages..."></textarea>
                                </div>
                                <div class="mt-3 col-sm-12 col-lg-6">
                                    <button class="primary-button w-100 rounded-pill">
                                        <i class="fa-solid fa-paper-plane"></i>
                                        <span>Send Message</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 categories">
                    <div class="the-doc heading-color text-center">
                        <div class="pro-img mx-auto">
                            <img class="image rounded-circle" src="./src/assets/image/content-image/bd-pro.webp" alt="">
                        </div>
                        <h4 class="mt-3">Dr. Smith Jason</h4>
                        <h6>Cardiology</h6>
                        <p class="text-md mt-2 capital mt-4">paw care Center, New Jercy, America.</p>
                    </div>
                    <div class="catagory-lists my-4 cata-card">
                        <h5 class="mb-4">Specialist</h5>
                        <ul>
                            <li><a href="">Cardiology</a></li>
                            <li><a href="">Orthopedic</a></li>
                            <li><a href="">Dermatologists</a></li>
                            <li><a href="">Ophthalmologists</a></li>
                            <li><a href="">Radiologist</a></li>
                            <li><a href="">Psychologist</a></li>
                        </ul>
                    </div>
                    <div class="popular-post gap-3 cata-card">
                        <h5 class="capital primary-text">populer post</h5>
                        <div class="p-post d-flex">
                            <div class="image-sm">
                                <img class=" rounded-2" src="./src/assets/image/content-image/image.webp" alt="">
                            </div>
                            <div class="post-text">
                                <p class="text-lg">
                                    The Problem With BackPain
                                </p>
                                <span class="date">3.11.2023</span>
                            </div>
                        </div>
                        <div class="p-post d-flex">
                            <div class="image-sm">
                                <img class=" rounded-2" src="./src/assets/image/content-image/image.webp" alt="">
                            </div>
                            <div class="post-text">
                                <p class="text-lg">
                                    The Problem With BackPain
                                </p>
                                <span class="date">3.11.2023</span>
                            </div>
                        </div>
                        <div class="p-post d-flex">
                            <div class="image-sm">
                                <img class="rounded-2" src="./src/assets/image/content-image/image.webp" alt="">
                            </div>
                            <div class="post-text">
                                <p class="text-lg">
                                    The Problem With BackPain
                                </p>
                                <span class="date">3.11.2023</span>
                            </div>
                        </div>
                        <div class="p-post d-flex">
                            <div class="image-sm">
                                <img class="rounded-2" src="./src/assets/image/content-image/image.webp" alt="">
                            </div>
                            <div class="post-text">
                                <p class="text-lg">
                                    The Problem With BackPain
                                </p>
                                <span class="date">3.11.2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="offer-image text-center">
                        <img class="image" src="./src/assets/image/content-image/blogdetails.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blogs section end  -->

    <!-- footer section start  -->
    <footer class="shade-3 py-100 mt-200">
        <div class="container newsletter-container">
            <div class="newsletter shade-4 position-relative" >
                <div class="f-img">
                    <div class="newsletter-width">
                        <div class="row m-0">
                            <div class="col-md-6 hide-sm">
                                <div class="image-container">
                                    <img src="./src/assets/image/content-image/newsletter.webp" alt="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 te-margin">
                                <h2 class="text-white ft-sub">Subscribe To Our Newsletter</h2>
                                <div class="d-flex rounded-pill bg-white p-1">
                                    <input type="email" class="form-control border-0" placeholder="Enter your E-mail">
                                    <button class="tertiary-button d-block center rounded-pill">
                                        <span>Subscribe</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-links row m-top text-white between">
                <div class="col-sm-8 col-md-6 desktop-p">
                    <img data-aos="fade-in" data-aos-duration="1600" src="./src/assets/image/logo-white.svg" alt="">
                    <p class="text-white my-4"  data-aos="fade-in" data-aos-duration="2600">We are committed to upholding the highest standards of medical care, ethics, and professionalism. </p>
                    <div class="social-icon d-flex">
                        <div class="icon"  data-aos="fade-in" data-aos-duration="800">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        <div class="icon"  data-aos="fade-in" data-aos-duration="900">
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <div class="icon"  data-aos="fade-in" data-aos-duration="1000">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
                        <div class="icon"  data-aos="fade-in" data-aos-duration="1100">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
                <div class="footer-link col-sm-12 col-md-4">
                    <h5 class="text-white" data-aos="fade" data-aos-duration="2600">Contact Us</h5>
                    <ul>
                        <li data-aos="fade-in" data-aos-duration="1000">
                            <a href="tel:+8801234567890">
                                <span class="call center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone icon-color"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> 
                                    &nbsp; Call: +8801234567890</span>
                            </a>
                        </li>
                        <li data-aos="fade-in" data-aos-duration="1200">
                            <a href="mail-to:info@dreamarray.com">
                                <span class="mail center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail icon-color"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    &nbsp; E-mail: info@dreamarray.com</span>
                            </a>
                        </li>
                        <li data-aos="fade-in" data-aos-duration="1400">
                            <a href="#">
                                <span class="location center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin icon-color"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    &nbsp; Monipuri Para, Farmgate, Dhaka</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end  -->
    
    <div class="copy-right">
        <p class="center my-3">Copywrite 2023 PawCare All Rights Reserved</p>
    </div>

        <!-- essentials  -->

    <!-- plugin javascript  -->
    <script src="./src/assets/js/jquery.min.js"></script>
    <!-- carousel  -->
    <script src="./src/assets/js/owl.carousel.min.js"></script>
    <!-- bundle js files  -->
    <script src="./src/assets/js/bootstrap.bundle.min.js"></script>
    <!-- custom javascript  -->
    <script src="./src/assets/js/main.js"></script>

    <!-- fontawesome kit  -->
    <script src="https://kit.fontawesome.com/38554ff06d.js" crossorigin="anonymous"></script>
    <!-- animation  -->
    <script src="./src/assets/css/aos@2.3.1_dist_aos.js"></script>

    <!--  animation  -->
    <script>
    AOS.init({once: true});
    </script>
</body>
</html>