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
                            <li class="links about-us active">
                                <a class="nav-item nav-link text-md" href="about-us.html" aria-current="page">About Us</a>
                            </li>
                            <li class="links service">
                                <a class="nav-item nav-link text-md" href="service.html" aria-current="page">Service</a>
                            </li>
                            <li class="links blogs">
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
    <section class="hero our-blogs-bg common-bg">
        <div class="hero-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 align-center my-auto hero-headings" data-aos="fade" data-aos-duration="2600">
                        <h2 class="text-paw">About Us</h2>
                        <div class="d-flex text-lg">
                            <a href="index.html">Home</a>&nbsp;/&nbsp;
                            <span class="capital">about us</span>
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

    <!-- our story section start  -->
    <section class="about-story py-100">
        <div class="container">
            <div class="row gx-3">
                <div class="right col-sm-12 col-lg-6">
                    <div class="ms-auto text-center">
                        <div class="hero-image position-relative">
                            <div class="left-bg position-absolute hide-md">
                                <img class="breathing" data-aos="fade" data-aos-duration="1600" src="./src/assets/image/bg/foot-md.svg" alt="">
                                <div class="breathing" data-aos="fade" data-aos-duration="1600">
                                    <svg class="red" width="230" height="338" viewBox="0 0 230 338" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="44.6077" width="24" height="24" transform="rotate(30 44.6077 0)" fill="#6F1943"/>
                                        <circle cx="121" cy="144.392" r="5" fill="#8FC424"/>
                                        <circle cx="5" cy="229.392" r="5" fill="#FF8559"/>
                                        <circle cx="225" cy="332.392" r="5" fill="#8FC424"/>
                                        </svg>
                                </div>
                            </div>
                            <div class="hero-image-container mx-auto" data-aos="fade-right" data-aos-duration="1600">
                                <div class="position-absolute xp hide-md">
                                    <h2 class="text-white">5+</h2>
                                    <span class="capital text-sm text-white">Years Experience</span>
                                </div>
                                <svg class="image" width="auto" height="auto" viewBox="0 0 570 575" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M293.319 1.0944C232.802 -6.88737 177.313 30.3209 127.177 62.9516C76.1157 96.1849 21.4903 132.925 4.76983 188.896C-11.7047 244.044 22.7813 298.285 40.5016 353.096C58.6981 409.379 62.9274 473.028 109.444 512.662C158.244 554.24 231.444 590.131 293.319 568.503C356.773 546.324 359.491 463.297 398.545 411.611C421.004 381.886 449.959 360.296 472.87 330.873C508.296 285.379 579.663 248.168 568.908 192.827C558.516 139.355 475.206 135.173 428.527 102.697C380.972 69.6123 352.045 8.83986 293.319 1.0944Z" fill="#8FC424" class="story-svg"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M304.932 18.7194C248.106 11.2288 196.002 46.1473 148.925 76.77C100.978 107.958 49.6843 142.437 33.9838 194.964C18.5141 246.718 50.8965 297.622 67.536 349.059C84.6226 401.879 88.5938 461.611 132.273 498.806C178.096 537.826 246.831 571.507 304.932 551.211C364.516 530.396 367.068 452.479 403.739 403.973C424.829 376.078 452.017 355.816 473.53 328.204C506.795 285.509 573.809 250.588 563.711 198.653C553.953 148.471 475.725 144.547 431.892 114.07C387.239 83.0208 360.076 25.9882 304.932 18.7194Z" fill="#FAF5FF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M304.932 18.7194C248.106 11.2288 196.002 46.1473 148.925 76.77C100.978 107.958 49.6843 142.437 33.9838 194.964C18.5141 246.718 50.8965 297.622 67.536 349.059C84.6226 401.879 88.5938 461.611 132.273 498.806C178.096 537.826 246.831 571.507 304.932 551.211C364.516 530.396 367.068 452.479 403.739 403.973C424.829 376.078 452.017 355.816 473.53 328.204C506.795 285.509 573.809 250.588 563.711 198.653C553.953 148.471 475.725 144.547 431.892 114.07C387.239 83.0208 360.076 25.9882 304.932 18.7194Z" fill="url(#pattern0)"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_101_2636" transform="matrix(0.000819426 0 0 0.000811688 0.0575098 0)"/>
                                    </pattern>
                                    <image id="image0_101_2636" width="1180" height="1260" xlink:href="./src/assets/image/content-image/contact.webp">
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 my-auto mt-md-auto">
                    <div class="elevated-container">
                        <h6 class="capital sub-heading mb-0" data-aos="fade-down" data-aos-duration="600">Our Story</h6>
                    </div>
                    <h1 class="os-heading" data-aos="fade-left" data-aos-duration="600">
                        Our Journey to 
                    <img src="./src/assets/image/3_paw.svg" alt="">
                    Becoming a Leading Pet Care Provider
                    </h1>
                    <p class="my-3" data-aos="fade-up" data-aos-duration="600">We take pride in our experience and dedication to animal care, and our story is a testament to that. From humble beginnings to a thriving pet care business, we are passionate about providing high-quality, reliable, and safe pet care serviceOur Storys. Our story reflects our values, our vision, and our commitment to making a positive impact on the lives of pets and their owners.</p>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- our story section end  -->

    <!-- our mission section start  -->
    <section class="mission py-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 my-auto">
                    <div class="position-relative">
                        <div class="elevated-container">
                            <h6 class="capital sub-heading mb-0"  data-aos="fade-down" data-aos-duration="600">our mission</h6>
                        </div>
                        <h1 class="heading"  data-aos="fade-right" data-aos-duration="600">Our Values and Objectives as a Pet Care Provider
                            <img class="px-2 rounded-pill bg-coral" src="./src/assets/image/small-dog.svg" alt="">
                        </h1>
                        <p class="text-md para mb-48"  data-aos="fade-right" data-aos-duration="900">Our mission is simple: to provide the best possible care for your furry family members. We strive to achieve this through:</p>
                    </div>
                    <div class="text-md secondary-text">
                        <div class="paw-print" data-aos="fade-down" data-aos-duration="600">
                            <!-- <img src="./src/assets/image/paw-list.svg" alt=""> -->
                            <p><span class="text-xxl">Involvement in Local Animal Charities:</span> We are participate in local animal charities to help raise awareness and funds for pet welfare initiatives.</p>
                        </div>
                        <div class="paw-print" data-aos="fade-down" data-aos-duration="800"> 
                           <p><span class="text-xxl"> Volunteer Work:</span> Our team members volunteer their time to help animals in need, whether it's through fostering, pet adoption events, or volunteering at animal shelters.</p>
                        </div>
                        <div class="paw-print" data-aos="fade-down" data-aos-duration="1000">
                            <p><span class="text-xxl">Donations:</span> We donate a portion of our profits to local animal charities and organizations to support their efforts in promoting pet welfare..</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-1 order-2">
                    <div class="image-container position-relative mx-auto" data-aos="fade-left" data-aos-duration="1600">
                        <div class="bottom-image top-left" data-aos="fade-down" data-aos-duration="1600">
                            <img class="image" src="./src/assets/image/content-image/image-1.webp" alt="">
                        </div>
                        <div class="top-image bottom-right" data-aos="fade-up" data-aos-duration="1600">
                            <img class="image" src="./src/assets/image/content-image/image-2.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our mission section end  -->

    <!-- our service section start -->
    <section class="service py-100 shade-7">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-80">
                    <div class="row">
                        <div class="col-12 col-md-6 position-relative">
                            <div class="position-absolute bg-left">
                                <img data-aos="fade-down" data-aos-duration="2600" src="./src/assets/image/bg/nigga-dog.svg" alt="">
                            </div>
                            <div>
                                <div class="elevated-container">
                                    <h6 class="capital sub-heading"  data-aos="fade-down" data-aos-duration="600">Our service</h6>
                                </div>
                                <h1  data-aos="fade-in" data-aos-duration="1600">Experience the <br> Best Care for Your Pet <br> with Us.</h1>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 my-auto elevated-container">
                            <p class="text-md"  data-aos="fade-down" data-aos-duration="1600">Our pet day care services offer a safe, fun-filled environment for your furry friend. From playtime to grooming, our skilled team of professionals provides tailored care to meet your pet's unique needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 position-relative">
                    <div class="row z-10">
                        <div class="col-lg-4 col-md-12">
                            <div class="service-card mx-auto" data-aos="fade-up"
                            data-aos-duration="1000">
                                <img class="image" src="./src/assets/image/content-image/washing-pet-dog-home.webp" alt="">
                                <div class="card-text">
                                    <h5>Dog Day Care Service </h5>
                                    <p class="text-md">Specializes in the diagnosis and treatment of heart and cardiovascular. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="service-card mx-auto" data-aos="fade-up"
                            data-aos-duration="700">
                                <img class="image" src="./src/assets/image/content-image/2women-2dogs.webp" alt="">
                                <div class="card-text">
                                    <h5>Dog Walking Service</h5>
                                    <p class="text-md">Specializes in the diagnosis and treatment of heart and cardiovascular. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="service-card mx-auto" data-aos="fade-up"
                            data-aos-duration="400">
                                <img class="image" src="./src/assets/image/content-image/service.webp" alt="">
                                <div class="card-text">
                                    <h5>Overnight Dog Stay </h5>
                                    <p class="text-md">Specializes in the diagnosis and treatment of heart and cardiovascular. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute bg-right-path z-1">
                        <img src="./src/assets/image/bg/dott-path.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our service section end -->
    
    <!-- our Community Involvement section start  -->
    <section class="community mission py-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 my-auto">
                    <div class="position-relative">
                        <div class="position-absolute bg-left">
                            <img class="breathing" src="./src/assets/image/bg/foot-left.svg" alt="">
                        </div>
                        <div>
                            <div class="elevated-container">
                                <h6 class="capital sub-heading mb-0" data-aos="fade-down" data-aos-duration="600">Community Involvement</h6>
                            </div>
                            <h1 class="heading" data-aos="fade-right" data-aos-duration="1600">Our Involvement for Pet Welfare to making a positive impact
                            </h1>
                            <p class="text-md para mb-48" data-aos="fade-down" data-aos-duration="500">Our mission is simple: to provide the best possible care for your furry family members. We strive to achieve this through:</p>
                        </div>
                    </div>
                    <div class="text-md secondary-text" data-aos="fade-down" data-aos-duration="1600">
                        <div class="paw-print">
                            <!-- <img src="./src/assets/image/paw-list.svg" alt=""> -->
                            <p><span class="text-xxl">Involvement in Local Animal Charities:</span> We are participate in local animal charities to help raise awareness and funds for pet welfare initiatives.</p>
                        </div>
                        <div class="paw-print">
                           <p><span class="text-xxl"> Volunteer Work:</span> Our team members volunteer their time to help animals in need, whether it's through fostering, pet adoption events, or volunteering at animal shelters.</p>
                        </div>
                        <div class="paw-print">
                            <p><span class="text-xxl">Donations:</span> We donate a portion of our profits to local animal charities and organizations to support their efforts in promoting pet welfare..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 com-gallery float-end mx-auto p-0">
                    <div class="position-relative">
                        <div class="image-1">
                            <img class="image px-2" data-aos="fade-right" data-aos-duration="600" src="./src/assets/image/content-image/ci-1.webp" alt="">
                        </div>
                        <div class="d-flex">
                            <div class="image-left image">
                                <img class="one" data-aos="fade-right" data-aos-duration="1600" src="./src/assets/image/content-image/ci-2.webp" alt="">
                                <img class="two" data-aos="fade-right" data-aos-duration="2600" src="./src/assets/image/content-image/ci-4.webp" alt="">
                            </div>
                            <div class="image-right image">
                                <img class="one" data-aos="fade-right" data-aos-duration="1000" src="./src/assets/image/content-image/ci-3.webp" alt="">
                                <img class="two" data-aos="fade-right" data-aos-duration="2200" src="./src/assets/image/content-image/ci-5.webp" alt="">
                            </div>
                        </div>
                        <div class="position-absolute bg-right">
                            <img class="breathing" src="./src/assets/image/bg/foot-right.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our Community Involvement section end  -->

    <!-- gallery section start  -->
    <section class="our-gallery py-100">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="position-absolute left-bg">
                        <img data-aos="fade-right" data-aos-duration="2600" src="./src/assets/image/bg/puppy-wbg.svg" alt="">
                    </div>
                    <div class="text-center">
                        <div class="elevated-container">
                            <h6 class="capital sub-heading" data-aos="fade-down" data-aos-duration="600">Our gallery</h6>
                        </div>
                        <h1 class="mb-80" data-aos="fade-right" data-aos-duration="1600">Capturing the Joy -  A Peek Inside Our PawCare Photo Gallery
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 g-img" data-aos="fade-up" data-aos-duration="600">
                    <img src="./src/assets/image/content-image/g-1.webp" alt="">
                </div>
                <div class="col-12 col-sm-6 col-md-4 g-img" data-aos="fade-up" data-aos-duration="1600">
                    <img src="./src/assets/image/content-image/g-2.webp" alt="">
                </div>
                <div class="col-12 col-sm-6 col-md-4 g-img" data-aos="fade-up" data-aos-duration="2600">
                    <img src="./src/assets/image/content-image/g-3.webp" alt="">
                </div>
                <div class="col-12 col-sm-6 col-md-4 g-img" data-aos="fade-up" data-aos-duration="1000">
                    <img src="./src/assets/image/content-image/g-4.webp" alt="">
                </div>
                <div class="col-12 col-sm-6 col-md-4 g-img" data-aos="fade-up" data-aos-duration="2200">
                    <img src="./src/assets/image/content-image/g-5.webp" alt="">
                </div>
                <div class="col-12 col-sm-6 col-md-4 g-img" data-aos="fade-up" data-aos-duration="1300">
                    <img src="./src/assets/image/content-image/g-6.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- gallery section end  -->

    <!-- teams section start   -->
    <section class="team position-relative">
        <div class="position-absolute bg-right-path">
            <img src="./src/assets/image/bg/dott-path.svg" alt="">
        </div>
        <div class="team-bg gradient-1 py-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center mb-80">
                            <div class="elevated-container">
                                <h6 class="capital sub-heading mb-0" data-aos="fade-down" data-aos-duration="600">Our team</h6>
                            </div>
                            <h1 class="heading" data-aos="fade-left" data-aos-duration="1600">Meet the Caring People Behind Our Pet Day Care Services
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row p-0 slider-team owl-carousel owl-theme">
                    
                    
                    <!-- <div class="image-container position-relative mx-auto">
                        <div class="bottom-image top-left">
                            <img class="image" src="./src/assets/image/content-image/top-left.webp" alt="">
                        </div>
                        <div class="top-image bottom-right ">
                            <img class="image " src="./src/assets/image/content-image/bottom-right.webp" alt="">
                        </div>
                    </div> -->
                    
                    
                    <div class="mb-3 col-12 .col-md-6 .col-lg-4 item mx-auto">
                        <div class="inner-cont text-center mt-auto d-flex">
                            <div class="align-self-end mx-auto p-4">
                                <h5>Dr. Jaime Soland</h5>
                                <span>annbelle</span>
                            </div>
                        </div>
                        <div class="image">
                            <img src="./src/assets/image/content-image/team-1.webp" alt="">
                        </div>
                    </div>
                    <div class="mb-3 col-12 .col-md-6 .col-lg-4 item mx-auto">
                        <div class="inner-cont text-center mt-auto d-flex">
                            <div class="align-self-end mx-auto p-4">
                                <h5>Dr. Jaime Soland</h5>
                                <span>Psychologist</span>
                            </div>
                        </div>
                        <div class="image">
                            <img src="./src/assets/image/content-image/team-2.webp" alt="">
                        </div>
                    </div>
                    <div class="mb-3 col-12 .col-md-6 .col-lg-4 item mx-auto">
                        <div class="inner-cont text-center mt-auto d-flex">
                            <div class="align-self-end mx-auto p-4">
                                <h5>Dr. nobody</h5>
                                <span>Psychologist</span>
                            </div>
                        </div>
                        <div class="image">
                            <img src="./src/assets/image/content-image/team-3.webp" alt="">
                        </div>
                    </div>
                    
                    <div class="mb-3 col-12 .col-md-6 .col-lg-4 item mx-auto">
                        <div class="inner-cont text-center mt-auto d-flex">
                            <div class="align-self-end mx-auto p-4">
                                <h5>Dr. Jaime Soland</h5>
                                <span>annbelle</span>
                            </div>
                        </div>
                        <div class="image">
                            <img src="./src/assets/image/content-image/team-1.webp" alt="">
                        </div>
                    </div>
                    <div class="mb-3 col-12 .col-md-6 .col-lg-4 item mx-auto">
                        <div class="inner-cont text-center mt-auto d-flex">
                            <div class="align-self-end mx-auto p-4">
                                <h5>Dr. Jaime Soland</h5>
                                <span>Psychologist</span>
                            </div>
                        </div>
                        <div class="image">
                            <img src="./src/assets/image/content-image/team-2.webp" alt="">
                        </div>
                    </div>
                    <div class="mb-3 col-12 .col-md-6 .col-lg-4 item mx-auto">
                        <div class="inner-cont text-center mt-auto d-flex">
                            <div class="align-self-end mx-auto p-4">
                                <h5>Dr. nobody</h5>
                                <span>Psychologist</span>
                            </div>
                        </div>
                        <div class="image">
                            <img src="./src/assets/image/content-image/team-3.webp" alt="">
                        </div>
                    </div>
                    <div class="mb-3 col-12 .col-md-6 .col-lg-4 item mx-auto">
                        <div class="inner-cont text-center mt-auto d-flex">
                            <div class="align-self-end mx-auto p-4">
                                <h5>Dr. Jaime Soland</h5>
                                <span>annbelle</span>
                            </div>
                        </div>
                        <div class="image">
                            <img src="./src/assets/image/content-image/team-2.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teams section end  -->

    <!-- testimonial section start  -->
    <section class="testimonial py-100">
        <div class="container position-relative">
            <div class="position-absolute bg-left">
                <img class="breathing" src="./src/assets/image/bg/Shapes-bg.svg" alt="">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="elevated-container">
                        <h6 class="capital sub-heading text-center mb-0" data-aos="fade-down" data-aos-duration="600">testimonial</h6>
                    </div>
                    <h1 class="heading text-center" data-aos="fade-right" data-aos-duration="1600">Our Client Happy To Say About Us</h1>
                </div>
            </div>
            <div class="row p-0">
                <div class="col-12 col-lg-6 position-relative testimonial-container">
                    <div class="testimonial-bg d-none d-lg-block">
                        <div class="image">
                            <svg data-aos="fade" data-aos-duration="2600" width="845" height="533" viewBox="0 0 845 533" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M845 266.627C845 119.719 725.908 0.626953 579 0.626953H32C14.3269 0.626953 0 14.9538 0 32.627V500.627C0 518.3 14.3269 532.627 32 532.627H579C725.908 532.627 845 413.535 845 266.627Z" fill="#FF8559" class="about-svg"/>
                                <path d="M796 266.627C796 119.719 676.908 0.626953 530 0.626953H32C14.3269 0.626953 0 14.9538 0 32.627V500.627C0 518.3 14.3269 532.627 32 532.627H530C676.908 532.627 796 413.535 796 266.627Z" fill="url(#pattern3)"/>
                                <defs>
                                <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#testimonial" transform="matrix(0.00100201 0 0 0.00149925 -0.00100578 0)"/>
                                </pattern>
                                <image id="testimonial" width="1000" height="667" xlink:href="./src/assets/image/content-image/testimonial.webp">
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="testimonial-card mx-auto mx-lg-start text-center owl-carousel owl-theme">
                        <div class="card-container me-auto shade-6 rounded-4">
                            <div class="clients">
                                <div class="image-container rounded-circle">
                                    <img class="image mx-auto" src="./src/assets/image/content-image/testimonial-pro.webp" alt="">
                                </div>
                                <h5>Mr. Jonson Miller</h5>
                            </div>
                            <div class="icon mb-3">
                                <img src="./src/assets/image/coma.png" alt="">
                            </div>
                            <p class="text-md text-start">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</p>
                        </div>
                        <div class="card-container me-auto shade-6 rounded-4">
                            <div class="clients">
                                <div class="image-container rounded-circle">
                                    <img class="image mx-auto" src="./src/assets/image/content-image/testimonial-pro.webp" alt="">
                                </div>
                                <h5>Mr. Jonson Miller</h5>
                            </div>
                            <div class="icon mb-3">
                                <img src="./src/assets/image/coma.png" alt="">
                            </div>
                            <p class="text-md text-start">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</p>
                        </div>
                        <div class="card-container me-auto shade-6 rounded-4">
                            <div class="clients">
                                <div class="image-container rounded-circle">
                                    <img class="image mx-auto" src="./src/assets/image/content-image/testimonial-pro.webp" alt="">
                                </div>
                                <h5>Mr. Jonson Miller</h5>
                            </div>
                            <div class="icon mb-3">
                                <img src="./src/assets/image/coma.png" alt="">
                            </div>
                            <p class="text-md text-start">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</p>
                        </div>
                        <div class="card-container me-auto shade-6 rounded-4">
                            <div class="clients">
                                <div class="image-container rounded-circle">
                                    <img class="image mx-auto" src="./src/assets/image/content-image/testimonial-pro.webp" alt="">
                                </div>
                                <h5>Mr. Jonson Miller</h5>
                            </div>
                            <div class="icon mb-3">
                                <img src="./src/assets/image/coma.png" alt="">
                            </div>
                            <p class="text-md text-start">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomized words which don’t look even believable. There are many variations of passages.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end  -->

    <!-- blog section start  -->
    <section class="blog py-100">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="position-absolute bg-left">
                        <img data-aos="fade-right" data-aos-duration="2600" src="./src/assets/image/bg/blog-dog.svg" alt="">
                    </div>
                    <div class="text-center">
                        <div class="elevated-container">
                            <h6 class="capital sub-heading" data-aos="fade-down" data-aos-duration="600">our blog</h6>
                        </div>
                        <h1 class="mb-80" data-aos="fade-right" data-aos-duration="1600"> Check Out Our PawCare Blog</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="slider owl-carousel owl-theme">
                        <div class="card">
                            <div class="blog-tabs">
                                <div>
                                    <img class="image" src="./src/assets/image/content-image/ab-blog-1.webp" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="between">
                                        <h6 class="capital blog-date">12 jan</h6>
                                        <span class="capital px-3 py-2 bg-1">dog health</span>
                                    </div>
                                
                                    <h5>10 Tips for Keeping Your Dog Healthy and Happy</h5>
                                    <div class="d-flex">
                                        <img class="blog-profile-pic" src="./src/assets/image/small-dog.svg" alt="">
                                        <span class="ms-2">Dr. Jack Jacob</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="blog-tabs">
                                <div >
                                    <img class="image" src="./src/assets/image/content-image/ab-blog-2.webp" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="between">
                                        <h6 class="capital blog-date">13 jan</h6>
                                        <span class="capital px-3 py-2 bg-1">dog health</span>
                                    </div>
                                    <h5>Choose the Best Dog Breed for Your Lifestyle</h5>
                                    <div class="d-flex">
                                        <img class="blog-profile-pic" src="./src/assets/image/small-dog.svg" alt="">
                                        <span class="ms-2">Dr. Jack Jacob</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="blog-tabs">
                                <div>
                                    <img class="image" src="./src/assets/image/content-image/ab-blog-3.webp" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="between">
                                        <h6 class="capital blog-date">14 jan</h6>
                                        <span class="capital px-3 py-2 bg-1">dog health</span>
                                    </div>
                                    <h5>Need to Know About Dog Nutrition and Feeding</h5>
                                    <div class="d-flex">
                                        <img class="blog-profile-pic" src="./src/assets/image/small-dog.svg" alt="">
                                        <span class="ms-2">Dr. Jack Jacob</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="blog-tabs">
                                <div>
                                    <img class="image" src="./src/assets/image/content-image/ab-blog-1.webp" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="between">
                                        <h6 class="capital blog-date">12 jan</h6>
                                        <span class="capital px-3 py-2 bg-1">dog health</span>
                                    </div>
                                
                                    <h5>10 Tips for Keeping Your Dog Healthy and Happy</h5>
                                    <div class="d-flex">
                                        <img class="blog-profile-pic" src="./src/assets/image/small-dog.svg" alt="">
                                        <span class="ms-2">Dr. Jack Jacob</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="blog-tabs">
                                <div >
                                    <img class="image" src="./src/assets/image/content-image/ab-blog-2.webp" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="between">
                                        <h6 class="capital blog-date">13 jan</h6>
                                        <span class="capital px-3 py-2 bg-1">dog health</span>
                                    </div>
                                    <h5>Choose the Best Dog Breed for Your Lifestyle</h5>
                                    <div class="d-flex">
                                        <img class="blog-profile-pic" src="./src/assets/image/small-dog.svg" alt="">
                                        <span class="ms-2">Dr. Jack Jacob</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="blog-tabs">
                                <div>
                                    <img class="image" src="./src/assets/image/content-image/ab-blog-3.webp" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="between">
                                        <h6 class="capital blog-date">14 jan</h6>
                                        <span class="capital px-3 py-2 bg-1">dog health</span>
                                    </div>
                                    <h5>Need to Know About Dog Nutrition and Feeding</h5>
                                    <div class="d-flex">
                                        <img class="blog-profile-pic" src="./src/assets/image/small-dog.svg" alt="">
                                        <span class="ms-2">Dr. Jack Jacob</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="blog-tabs">
                                <div >
                                    <img class="image" src="./src/assets/image/content-image/ab-blog-2.webp" alt="">
                                </div>
                                <div class="card-content">
                                    <div class="between">
                                        <h6 class="capital blog-date">13 jan</h6>
                                        <span class="capital px-3 py-2 bg-1">dog health</span>
                                    </div>
                                    <h5>Choose the Best Dog Breed for Your Lifestyle</h5>
                                    <div class="d-flex">
                                        <img class="blog-profile-pic" src="./src/assets/image/small-dog.svg" alt="">
                                        <span class="ms-2">Dr. Jack Jacob</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end  -->
        
    <!-- footer section start  -->
    <footer class="shade-3 py-100 mt-200">
        <div class="container newsletter-container">
            <div class="newsletter shade-4 position-relative">
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
    AOS.init({once : true});
    </script>
</body>
</html>