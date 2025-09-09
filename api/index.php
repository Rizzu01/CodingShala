<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingShala</title>
    <link rel="shortcut icon" type="image/x-icon" href="/images/fav.png">
    <link rel="stylesheet" href="/css/plugins/fontawesome-6.css">
    <link rel="stylesheet" href="/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/css/vendor/jquery-ui.css">
    <link rel="stylesheet" href="/css/vendor/metismenu.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

<style>
    
.full-stac {
    color: #ffd907 !important;
    font-size: 32px !important;
    line-height: 40px !important;
    font-weight: 700 !important;
}

.disc {
    color: #fff !important;
    font-size: 24px;
    font-weight: 700 !important;
}

.call-to-sction1 {
    padding: 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 12px;
    border: 1px solid #eee;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .12);
}

.upcoming {
    background: #EEEBFF; 
    padding: 40px; 
    border: 1px solid #DDD8F9;
    border-radius: 20px;
}

.about-card-wrapper-main .single-card-about {
    display: flex;
    align-items: flex-start;
    gap: 18px;
    padding: 30px;
    border: 1px solid #553cdf;
    background: #FAF9FF;
    width: 100%;
    border-radius: 10px;
}

.about-area-left-four .thumbnail-right-image {
  margin-bottom: 0px;
}

.accordion-button:not(.collapsed) {
  color: #000;
  background-color: transparent;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.125);
  box-shadow: inset 0 -1px 0 rgba(0,0,0,.125);
}

#apply_btns {
    padding: 8px 16px;
    font-size: 14px;
    margin-top: 26px;
    margin-bottom: 0px;
}

.amounts {
    font-size: 24px;
    font-weight: 600;
    color: #000;
}

.offereds {
    color: #8a8a8a;
    font-weight: 400;
    margin-right: 10px;
}

.valid {
    background: #DEDBFA;
    color: var(--color-primary);
    padding: 4px 8px;
    font-size: 12px;
    border-radius: 4px;
    border: 1px solid var(--color-primary);
}

.login-page-form-area input {
    border-radius: 4px;
    border: 1px solid #DDD8F9;
    background: #FFF;
    height: 40px;
}

.login-page-form-area label {
    color: #110C2D;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: 0px;
    margin-bottom: 15px;
}

.login-page-form-area .single-input-wrapper {
    margin-bottom: 12px;
}

.login-page-form-area p {
    margin: auto;
    margin-top: auto;
    margin-bottom: auto;
    text-align: center;
    margin-top: 5px !important;
    margin-bottom: 0;
    font-size: 12px;
}

.modal-content {
    max-width: 360px;
    margin: 0 auto;
}

.google-sign-in {
    border-radius: 4px;
    border: 1px solid #DDD8F9;
    background: #FFF;
    height: 40px;
    margin-bottom: 15px;
}

.google_image_container{
    text-align: center;
    padding: 5px 10px 5px 10px;
}

.helper .text2 {
    color: #8a8a8a;
    padding: 0 0 3px;
    background: #fff;
    font-family: Inter, sans-serif;
    font-weight: 500;
    font-size: 12px;
}

.helper .text2 p {
    width: 40px;
    margin: 0 auto !important;
    position: relative;
    z-index: 10;
    background: #fff;
}

.helper .border {
    position: relative;
    margin-top: -14px;
    margin-bottom: 20px;
    border: 0 !important;
    border-top: 1px solid #ddd !important;
}


@media (min-width: 768px) {
.marq-sliders {
    display: none !important;
}
}

@media (min-width: 320px) and (max-width: 570px) {

.banner-right-img {
    display: flex;
    align-items: flex-end;
    height: 100%;
    margin-top: -80px;
}

.banner-content-one {
    padding: 0px;
    margin-top: -50px;
}

.banner-area-one {
    height: 750px;
}

.mt-dec-fun-f {
  margin-top: -160px;
  position: relative;
  z-index: 10;
}

.upcoming {
    background: #EEEBFF; 
    padding: 20px; 
    border: 1px solid #DDD8F9;
    border-radius: 20px;
}

.mt_sm--100 {
    margin-top: 40px !important;
}

.single-choose-reason-1 {
    gap: 17px;
    width: 190px;
}

.course-details-btn-wrapper ul {
    display: flex;
    white-space: nowrap;
    flex-wrap: inherit;
    margin: auto;
    overflow-x: scroll !important;
    overflow-y: hidden !important;
}

.amounts {
    font-size: 16px;
    font-weight: 600;
    color: #000;
}

.offereds {
    color: #8a8a8a;
    font-weight: 400;
    margin-right: 5px;
}

.valid {
    background: #DEDBFA;
    color: var(--color-primary);
    padding: 4px 8px;
    font-size: 10px;
    border-radius: 4px;
    border: 1px solid var(--color-primary);
}

.login-page-form-area {
    width: 100%;
    padding: 10px;
}

.marq-sliders {
    background: #fff; 
    padding: 10px 0px;
    position: fixed;
    bottom: 0%;
    width: 100%;
}

.ticker {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    height: 50px;
    margin: 0 auto;
}

.news {
    width: 100%;
    background: #d5d0f1;
    padding: 0 2%;
}

.news marquee {
    font-size: 18px;
    margin-top: 12px;
}

.news-content p {
    margin-right: 41px; 
    display: inline;
    color: #553cdf;
} 


} 

@media (min-width: 571px) and (max-width: 767px) {

.banner-right-img {
    display: flex;
    align-items: flex-end;
    height: 100%;
    margin-top: -60px;
}

.banner-content-one {
    padding: 0px;
    margin-top: -50px;
}

.banner-area-one {
    height: 800px;
}

.mt-dec-fun-f {
  margin-top: -140px;
  position: relative;
  z-index: 10;
}

.mt_sm--100 {
    margin-top: 40px !important;
}

.course-details-btn-wrapper ul {
    display: flex;
    white-space: nowrap;
    flex-wrap: inherit;
    margin: auto;
    overflow-x: scroll !important;
    overflow-y: hidden !important;
}

.amounts {
    font-size: 16px;
    font-weight: 600;
    color: #000;
}

.offereds {
    color: #8a8a8a;
    font-weight: 400;
    margin-right: 5px;
}

.valid {
    background: #DEDBFA;
    color: var(--color-primary);
    padding: 4px 8px;
    font-size: 10px;
    border-radius: 4px;
    border: 1px solid var(--color-primary);
}


}

@media (min-width: 768px) and (max-width: 991px) {

.banner-right-img {
    display: flex;
    align-items: flex-end;
    height: 100%;
    margin-top: -60px;
}

.banner-content-one {
    padding: 0px;
    margin-top: -50px;
}


.banner-area-one {
    height: 900px;
}

.mt-dec-fun-f {
  margin-top: -140px;
  position: relative;
  z-index: 10;
}

}

</style>

    <!-- header style one -->
    <header class="header-one header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-one-wrapper">
                        <div class="left-side-header">
                            <a href="index" class="logo-area">
                                <img src="/images/logo/logo.png" alt="logo" width="150">
                            </a>
                        </div>
                        <div class="main-nav-one">
                            <nav>
                                <ul>
                                    <li>
                                        <a class="nav-link" href="#">Reviews</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">Companies Hiring</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">Guaranteed Placement</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">Career Options</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">Certifications</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">Fees</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">FAQ</a>
                                    </li>
                                   
                                </ul>
                            </nav>
                        </div>
                        <div class="main-nav-one">
                        </div>
                        <div class="header-right-area-one">
                            <div class="buttons-area">
                                <button type="button" class="rts-btn btn-primary mt-0" id="apply_btns" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                            </div>
                            <div class="menu-btn" id="menu-btn">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect width="20" height="2" fill="#1F1F25"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style end -->



    <!-- banner area start -->
    <div class="banner-area-one shape-move">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-xl-1 order-lg-1 order-sm-2 order-2">
                    <div class="banner-content-one">
                        <div class="inner">
                            <h1 class="title-banner">
                                <span class="full-stac">MASTER FullStack Development</span> Course with <br>
                                <span class="full-stac">Industry Expert</span> and Get <br>
                                <span style="color: #fff;"> Guaranteed INTERNSHIP & <br> 100% PLACEMENT Assistance.</span>
                            </h1>
                            <p class="disc">Get placed with ₹3-10 LPA salary</p>
                            <div class="banner-btn-author-wrapper">
                                <a href="#courses" class="rts-btn btn-border with-arrow">View All Course <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order--xl-2 order-lg-2 order-sm-1 order-1">
                    <div class="banner-right-img">
                        <img src="/images/banner_hero.png" alt="banner">
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!-- banner area end -->

    <!-- rts fun facts area start -->
    <div class="fun-facts-area-4 mt-dec-fun-f pb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-facts-main-wrapper-1 style-two">
                        <div class="single-fun-facts" style="width: 20%;">
                            <div class="icon">
                                <img src="/images/icon01.png" alt="icon">
                            </div>
                            <h5 class="title"><span>Online Course</span></h5>
                            <span class="enr">6 months</span>
                        </div>
                        <div class="single-fun-facts" style="width: 20%;">
                            <div class="icon">
                                <img src="/images/icon02.png" alt="icon">
                            </div>
                            <h5 class="title"><span>5 Month Program</span></h5>
                            <span class="enr">Starting this Month</span>
                        </div>
                        <div class="single-fun-facts" style="width: 20%;">
                            <div class="icon">
                                <img src="/images/icon03.png" alt="icon">
                            </div>
                            <h5 class="title"><span>High Paying Jobs</span></h5>
                            <span class="enr">3-10 LPA</span>
                        </div>
                        <div class="single-fun-facts" style="width: 25%;">
                            <div class="icon">
                                <img src="/images/icon04.png" alt="icon">
                            </div>
                            <h5 class="title"><span>Guaranteed Internship</span></h5>
                            <span class="enr">100% Internship</span>
                        </div>
                        <div class="single-fun-facts" style="width: 20%;">
                            <div class="icon">
                                <img src="/images/icon05.png" alt="icon">
                            </div>
                            <button type="button" class="rts-btn btn-primary" id="apply_btns" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                            <span class="enr">187,065 already applied</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts fun facts area end -->

    <!-- rts-top-category -->
    <div id="courses" class="top-category-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center-style">
                        <h3 class="title">Skills and tools you will learn</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-center mt--10">
                <h4 class="title">Frontend Skills</h4>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st01.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">Build Stunning Websites - HTML & CSS</h5>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st03.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">Web Design & Frontend Skills - JavaScript</h5>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st04.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">Create Beautiful User Interfaces - React</h5>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st05.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">Frontend Development Path - Redux</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row g-5 justify-content-center mt--10">
                <h4 class="title">Backend Skills</h4>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st06.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">Powerful Backend Development - Node.js</h5>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st08.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">Server & Database Skills - MongoDB & MySQL</h5>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st07.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">Build Robust Web Applications - Express.js</h5>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st09.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">High performance Request/Response - APIs</h5>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st11.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">Problem Solving skill - DSA</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row g-5 justify-content-center mt--10">
                <h4 class="title">Extra Skills</h4>
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st10.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">Latest gen AI tools</h5>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <a href="#" class="single-category-2 v-6">
                        <div class="icon">
                            <img src="/images/st12.png" alt="category" width="65">
                        </div>
                        <div class="information">
                            <h5 class="title">ChatGPT</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-top-category end -->
<?php
                                    if(@$_SESSION['success']){
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                    }
                                    if(@$_SESSION['failed']){
                                        echo $_SESSION['failed'];
                                        unset($_SESSION['failed']);
                                    }
                                ?>
    <!-- rts students feedbacka area start -->
    <div class="rts-students-feedback-area" style="padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-w-style-center">
                        <h3 style="float: left;">Placement Reviews</h3>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="swiper-feedback-wrapper-5">
                        <div class="swiper swiper-data" data-swiper='{
                                "spaceBetween":30,
                                "slidesPerView":3,
                                "loop": true,
                                "navigation":{
                                    "nextEl":".swiper-button-next",
                                    "prevEl":".swiper-button-prev"
                                },
                                "pagination":{
                                    "el":".swiper-pagination",
                                    "clickable":"true"
                                },
                                "autoplay":{
                                    "delay":"2000"
                                },
                                "breakpoints":{"320":{
                                    "slidesPerView":1,
                                    "spaceBetween":30},
                                "480":{
                                    "slidesPerView":1,
                                    "spaceBetween":30},
                                "640":{
                                    "slidesPerView":2,
                                    "spaceBetween":30},
                                "940":{
                                    "slidesPerView":2,
                                    "spaceBetween":30},
                                "1140":{
                                    "slidesPerView":3,
                                    "spaceBetween":30}
                                }
                            }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <p class="disc" style="color: #000 !important; font-size: 14px;font-weight: 400 !important;">
                                            It gave me the necessary skills & boosted my confidence. I particularly enjoyed the masterclasses & projects which helped me build a strong portfolio. The mentors refined my resume, provided constructive feedback for job applications, and offered invaluable guidance during interview preparation
                                        </p>
                                        <div class="authore-area">
                                            <img src="/images/students-feedback/02.png" alt="feedback">
                                            <div class="author">
                                                <h6 class="title">Gaurav</h6>
                                                <span>Full Stack Developer, Nurture Labs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <p class="disc" style="color: #000 !important; font-size: 14px;font-weight: 400 !important;">
                                            I landed a job even after a 2-year gap in my education. The Full Stack Development Placement Guarantee Course was well-structured, comprehensive, and flexible. The industry-level projects were good. Additionally, mock interviews & viva sessions were conducted to prepare for real-world interviews.
                                        </p>
                                        <div class="authore-area">
                                            <img src="/images/students-feedback/03.png" alt="feedback">
                                            <div class="author">
                                                <h6 class="title">Rahul</h6>
                                                <span>JavaScript Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <p class="disc" style="color: #000 !important; font-size: 14px;font-weight: 400 !important;">
                                            I knew the basics but the course solidified my knowledge, especially in back-end development. The teachers were helpful & answered all our doubts. The placement team helped me with the problems I was facing in getting placed & I soon got a work-from-home placement.
                                        </p>
                                        <div class="authore-area">
                                            <img src="/images/students-feedback/04.png" alt="feedback">
                                            <div class="author">
                                                <h6 class="title">Pratham</h6>
                                                <span>Front-end Web Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <p class="disc" style="color: #000 !important; font-size: 14px;font-weight: 400 !important;">
                                            The best part of the course was the doubt-clearing sessions which helped me resolve all my queries on time. The projects are too good & the work I did on them helped me crack interviews. I have gotten 2 internships & have been selected for companies during on-campus placements too..
                                        </p>
                                        <div class="authore-area">
                                            <img src="/images/students-feedback/02.png" alt="feedback">
                                            <div class="author">
                                                <h6 class="title">Varis</h6>
                                                <span>Associate Web Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <p class="disc" style="color: #000 !important; font-size: 14px; font-weight: 400 !important;">
                                            My favourite part about the course was the projects & assignments. I gained practical knowledge through them that I wasn't able to get through free resources. The resume review sessions were also helpful in proofreading & improving my resume.
                                        </p>
                                        <div class="authore-area">
                                            <img src="/images/students-feedback/02.png" alt="feedback">
                                            <div class="author">
                                                <h6 class="title">Aman</h6>
                                                <span>Software Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="left-align-arrow-btn">
                                <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                                <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts students feedbacka area end -->

   
    <div class="rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-sction1">
                        <div class="row">
                            <div class="col-lg-9">
                                <p class="title">Have doubts about Full Stack Development Placement Guarantee Course? Reach out to our counsellors by filling this form.</p>
                            </div>
                            <div class="col-lg-3">
                              <button type="button" class="rts-btn btn-primary mt-0" id="apply_btns" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts about area start -->
    <div class="rts-about-area rts-section-gap" style="margin-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center-style">
                        <h3 class="title" style="float: left;">How will you get guaranteed Internship?</h3>
                    </div>
                </div>
            </div>
            <div class="row mt--50 upcoming">
                <div class="col-lg-8 mt_md--120 mt_sm--100">
                    <div class="about-content-right-4">
                        <div class="title-area-left-2">
                            <h4>Go from beginner to pro in 6 months</h4>
                            <p class="disc" style="color: #000 !important; font-size: 15px">
                                With a curriculum designed and taught by industry experts, you will get the skills and mentorship for guaranteed success.
                            </p>
                        </div>
                        <div class="about-card-wrapper-main">
                            <div class="single-card-about">
                                <div class="information">
                                    <div class="icon">
                                        <img src="/images/icon06.png" alt="about-icon">
                                    </div>
                                    <h6 class="title" style="margin-top: 20px;">Live & on-demand sessions</h6>
                                </div>
                            </div>
                            <div class="single-card-about">
                                <div class="information">
                                    <div class="icon">
                                        <img src="/images/icon07.png" alt="about-icon">
                                    </div>
                                    <h6 class="title" style="margin-top: 20px;">Latest Al tools projects</h6>
                                </div>
                            </div>
                            <div class="single-card-about">
                                <div class="information">
                                    <div class="icon">
                                        <img src="/images/icon08.png" alt="about-icon">
                                    </div>
                                    <h6 class="title" style="margin-top: 20px;">Industry-level projects</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-area-left-four" style="margin-top:30px;">
                        <div class="thumbnail-right-image">
                            <img src="/images/istockphoto.jpg" alt="about">
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="row mt--50 upcoming">
                <div class="col-lg-4">
                    <div class="about-area-left-four" style="margin-top:30px;">
                        <div class="thumbnail-right-image">
                            <img src="/images/istockphoto.jpg" alt="about">
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-8 mt_md--120 mt_sm--100">
                    <div class="about-content-right-4">
                        <div class="title-area-left-2">
                            <h4>Become placement-ready</h4>
                            <p class="disc" style="color: #000 !important; font-size: 15px">
                                Prepare to ace your placements with our career coaches, having 10+ years of experience. Say goodbye to placement anxiety!
                            </p>
                        </div>
                        <div class="about-card-wrapper-main">
                            <div class="single-card-about">
                                <div class="information">
                                    <div class="icon">
                                        <img src="/images/icon09.png" alt="about-icon">
                                    </div>
                                    <h6 class="title" style="margin-top: 20px;">Soft skills trainings</h6>
                                </div>
                            </div>
                            <div class="single-card-about">
                                <div class="information">
                                    <div class="icon">
                                        <img src="/images/icon10.png" alt="about-icon">
                                    </div>
                                    <h6 class="title" style="margin-top: 20px;">Resume building & AI-Powered</h6>
                                </div>
                            </div>
                            <div class="single-card-about">
                                <div class="information">
                                    <div class="icon">
                                        <img src="/images/icon11.png" alt="about-icon">
                                    </div>
                                    <h6 class="title" style="margin-top: 20px;">All-new live bootcamp</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->

    <!-- course area start -->
    <div class="rts-section-gapBottom rts-feature-course-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area align-items-end">
                        <div class="title-area-left-style">
                            <h3 class="title">Our learners got placement. So can you!</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--50 ">
                <div class="col-lg-12">
                    <div class="swiper mySwiper-category-1 swiper-float-right-course swiper-data" data-swiper='{
                    "spaceBetween":30,
                    "slidesPerView":4,
                    "loop": true,
                    "autoplay":{
                        "delay":"2000"
                    },
                    "navigation":{
                        "nextEl":".swiper-button-next",
                        "prevEl":".swiper-button-prev"
                    },
                    "pagination":{
                        "el": ".swiper-pagination",
                        "clickable": "true"
                    },
                    "breakpoints":{"320":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "480":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "640":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "840":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "1140":{
                        "slidesPerView":3,
                        "spaceBetween":30},
                    "1340":{
                        "slidesPerView":4,
                        "spaceBetween":30}
                    }
                }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="/images/course/01.jpg" alt="course">
                                    </a>
                                    <div class="body-area">
                                        <a href="#">
                                            <h5 class="title">Varis</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="/images/course/02.jpg" alt="course">
                                    </a>
                                    <div class="body-area">
                                        <a href="#">
                                            <h5 class="title">Varis</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="/images/course/03.jpg" alt="course">
                                    </a>
                                    <div class="body-area">
                                        <a href="#">
                                            <h5 class="title">Varis</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="/images/course/04.jpg" alt="course">
                                    </a>
                                    <div class="body-area">
                                        <a href="#">
                                            <h5 class="title">Varis</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="/images/course/05.jpg" alt="course">
                                    </a>
                                    <div class="body-area">
                                        <a href="#">
                                            <h5 class="title">Varis</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="/images/course/06.jpg" alt="course">
                                    </a>
                                    <div class="body-area">
                                        <a href="#">
                                            <h5 class="title">Varis</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="/images/course/07.jpg" alt="course">
                                    </a>
                                    <div class="body-area">
                                        <a href="#">
                                            <h5 class="title">Varis</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                        <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

    <!-- rts category area start -->
    <div class="rts-category-nine-area rts-section-gap bg-category-9 bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center-style">
                        <h3 style="float: left;">Top career options in Full Stack Development Placement Guarantee Course</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="single-category-nine-area">
                        <div class="icon">
                            <img src="/images/category/19.svg" alt="category">
                        </div>
                        <a href="#">
                            <h5 class="title">Full Stack Developer</h5>
                        </a>
                        <p class="disc" style="color: #000 !important; font-weight: 400!important; font-size: 14px;">
                            Be a jack of all trades and create an entire website by yourself or manage teams who do!
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="single-category-nine-area">
                        <div class="icon">
                            <img src="/images/category/20.svg" alt="category">
                        </div>
                        <a href="#">
                            <h5 class="title">Software Development</h5>
                        </a>
                        <p class="disc" style="color: #000 !important; font-weight: 400!important; font-size: 14px;">
                            Be a jack of all trades and create an entire website by yourself or manage teams who do!
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="single-category-nine-area">
                        <div class="icon">
                            <img src="/images/category/21.svg" alt="category">
                        </div>
                        <a href="#">
                            <h5 class="title">Front-end Developer</h5>
                        </a>
                        <p class="disc" style="color: #000 !important; font-weight: 400!important; font-size: 14px;">
                            Develop all the visual elements of a website that you see and interact with (like this page!).
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="single-category-nine-area">
                        <div class="icon">
                            <img src="/images/category/22.svg" alt="category">
                        </div>
                        <a href="#">
                            <h5 class="title">Back-end Developer</h5>
                        </a>
                        <p class="disc" style="color: #000 !important; font-weight: 400!important; font-size: 14px;">
                            Manage the behind-the-scenes of a website. Keep the website running efficiently by managing servers.
                        </p>
                    </div>
                    <!-- single category area start nine end -->
                </div>
            </div>
        </div>
    </div>
   
    <div class="course-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area">
                        <div class="title-area-left-style">
                            <h3>Full Stack Development Placement Guarantee Course Details</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="why-choose-main-wrapper-1">
                        <div class="single-choose-reason-1">
                                <img src="/images/icon06.png" alt="icon" width="40">
                            <h6 class="title" style="color: #000;margin-left: -10px;">500 hours of learning</h6>
                        </div>
                        <div class="single-choose-reason-1">
                                <img src="/images/icon14.png" alt="icon" width="40">
                            <h6 class="title" style="color: #000;margin-left: -10px;">9 courses</h6>
                        </div>
                        <div class="single-choose-reason-1">
                                <img src="/images/icon15.png" alt="icon" width="40">
                            <h6 class="title" style="color: #000;margin-left: -10px;">5 Projects</h6>
                        </div>
                        <div class="single-choose-reason-1">
                                <img src="/images/icon13.png" alt="icon" width="40">
                            <h6 class="title" style="color: #000;margin-left: -10px;s">15 assignments</h6>
                        </div>
                        <div class="single-choose-reason-1">
                                <img src="/images/icon12.png" alt="icon" width="40">
                            <h6 class="title" style="color: #000;margin-left: -10px;">4 AI tools covered</h6>
                        </div>
                        <div class="single-choose-reason-1">
                                <img src="/images/icon11.png" alt="icon" width="40">
                            <h6 class="title" style="color: #000;margin-left: -10px;">placement bootcamp</h6>
                        </div>
                        <p>To learn more about the course download the brochure</p>
                    </div>
                    <a href="#" class="rts-btn btn-primary with-arrow">Download Brochure <i class="fa-regular fa-download"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

    <div class="rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area">
                        <div class="title-area-left-style">
                            <h3>Future-proof your tech career by learning top AI tools</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-sction1">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="title" style="margin-bottom:20px;color: #000;"><img src="/images/right.png" width="18" style="margin-right: 10px;">  <b> ChatGPT & Claude </b> for code generation, code review, debugging, & documentation like a pro</p>
                                <p class="title" style="margin-bottom:20px;color: #000;"><img src="/images/right.png" width="18" style="margin-right: 10px;"> <b>GitHub Copilot </b>  for coding faster, debugging with ease, & designing features better</p>
                                <p class="title" style="margin-bottom:20px;color: #000;"><img src="/images/right.png" width="18" style="margin-right: 10px;">  <b> Blackbox AI </b> to generate entire code with prompts in VS Code</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- rts students feedbacka area start -->
    <div class="rts-students-feedback-area" style="padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-w-style-center">
                        <h3>Learn from Top Industry Experts</h3>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="swiper-feedback-wrapper-5">
                        <div class="swiper swiper-data" data-swiper='{
                                "spaceBetween":30,
                                "slidesPerView":3,
                                "loop": true,
                                "navigation":{
                                    "nextEl":".swiper-button-next",
                                    "prevEl":".swiper-button-prev"
                                },
                                "pagination":{
                                    "el":".swiper-pagination",
                                    "clickable":"true"
                                },
                                "autoplay":{
                                    "delay":"2000"
                                },
                                "breakpoints":{"320":{
                                    "slidesPerView":1,
                                    "spaceBetween":30},
                                "480":{
                                    "slidesPerView":1,
                                    "spaceBetween":30},
                                "640":{
                                    "slidesPerView":2,
                                    "spaceBetween":30},
                                "940":{
                                    "slidesPerView":2,
                                    "spaceBetween":30},
                                "1140":{
                                    "slidesPerView":3,
                                    "spaceBetween":30}
                                }
                            }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <div class="authore-area">
                                            <img src="/images/users.png" alt="feedback" width="80">
                                            <div class="author">
                                                <h6 class="title">Gaurav</h6>
                                                <span>Full Stack Developer, Nurture Labs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <div class="authore-area">
                                            <img src="/images/users.png" alt="feedback" width="80">
                                            <div class="author">
                                                <h6 class="title">Rahul</h6>
                                                <span>JavaScript Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <div class="authore-area">
                                            <img src="/images/users.png" alt="feedback" width="80">
                                            <div class="author">
                                                <h6 class="title">Pratham</h6>
                                                <span>Front-end Web Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <div class="authore-area">
                                            <img src="/images/users.png" alt="feedback" width="80">
                                            <div class="author">
                                                <h6 class="title">Varis</h6>
                                                <span>Associate Web Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-students-feedback-5">
                                        <div class="authore-area">
                                            <img src="/images/users.png" alt="feedback" width="80">
                                            <div class="author">
                                                <h6 class="title">Aman</h6>
                                                <span>Software Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="left-align-arrow-btn">
                                <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                                <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts students feedbacka area end -->

    <!-- course details area start -->
    <div class="rts-course-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-w-style-center">
                        <h3 style="float: left;">FAQs</h3>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 order-cl-1 order-lg-1 order-md-2 order-sm-2 order-2">
                    <div class="course-details-btn-wrapper pb--50">
                        <ul class="nav nav-tabs new-ids" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Eligibility & Application</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Program prerequisites</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Payment</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contacts1-tab" data-bs-toggle="tab" data-bs-target="#contacts1" type="button" role="tab" aria-controls="contacts1" aria-selected="false">Start date & duration</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contacts2-tab" data-bs-toggle="tab" data-bs-target="#contacts2" type="button" role="tab" aria-controls="contacts2" aria-selected="false">Guaranteed Job Program</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contacts3-tab" data-bs-toggle="tab" data-bs-target="#contacts3" type="button" role="tab" aria-controls="contacts3" aria-selected="false">Certifications</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contacts4-tab" data-bs-toggle="tab" data-bs-target="#contacts4" type="button" role="tab" aria-controls="contacts4" aria-selected="false">Course</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contacts5-tab" data-bs-toggle="tab" data-bs-target="#contacts5" type="button" role="tab" aria-controls="contacts5" aria-selected="false">Bootcamp</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contacts6-tab" data-bs-toggle="tab" data-bs-target="#contacts6" type="button" role="tab" aria-controls="contacts6" aria-selected="false">AI tools</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contacts7-tab" data-bs-toggle="tab" data-bs-target="#contacts7" type="button" role="tab" aria-controls="contacts7" aria-selected="false">Need Further Assistance?</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mt--50" id="myTabContent">
                        <div class="tab-pane fade  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. Who is eligible to apply for the Placement Guarantee course?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The Placement Guarantee course program is meant for pre-final and final year students, recent graduates, and young professionals who wish to build a career in Full Stack Development. You should also be authorized and available to work in India upon completion of the course if you wish to avail of the internship guarantee benefits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. I am in the early years of college and will NOT be graduating in the next 12 months, can I still apply?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, if you have decided to make a career in full-stack development and are ready to put in the required time and effort to complete the course, you can still apply and we will evaluate your application based on its quality. You would be able to apply to the short-term or work-from-home internships that are published on Internshala.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. I have more than 3 years of work experience in a different field and now I want to switch to Full Stack Development, can I apply?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can. However, please note that the placement opportunities that we would be curating for the students of the Placement Guarantee course would be those of internships and the same will be made available to you too. Different companies may factor in your prior work experience in their hiring decisions differently and it will be at the sole discretion of the companies.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. Do I need to have a laptop or desktop to do the Placement Guarantee course or can I do it on mobile too?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                You can watch the videos and take quizzes & tests on any device including mobile. However, for assignments and projects, use of a desktop or laptop will be needed and hence it is advised that you do this full-stack development course on a laptop or desktop.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. How can I reserve my seat in advance?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                To reserve your seat in advance, simply pay a booking amount of ₹ 1,999 which will be adjusted toward your course fee upon enrollment. If our counsellors find your profile to be unfit, the amount will be refunded; however, if you choose to withdraw, this amount will be non-refundable.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. What questions will the application process consist of?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The application form would consist of questions on your education, your motivation to build a career in full-stack development, and questions to test your communication skills.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. I'm not able to make payment. What should you do now?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                You could try making the payment from a different card or account (of a friend or family). Otherwise, you can follow the instructions on how to make an offline payment here
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. What are the different options available to pay the course fee?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                You can pay the Placement Guarantee course fee online using any of the following payment methods - debit card, credit card, netbanking, UPI, and wallets. You will receive the link to make the payment once your application is successful.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. My payment got deducted twice. What should I do now?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Just let us know your registered email id along with the screenshot of the payment receipt or transaction history. You can submit your request using the "Need further assistance?" section. Once verified, the additional amount you paid will be refunded.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="contacts1" role="tabpanel" aria-labelledby="contacts1-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. Who is eligible to apply for the Placement Guarantee course?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The Placement Guarantee course program is meant for pre-final and final year students, recent graduates, and young professionals who wish to build a career in Full Stack Development. You should also be authorized and available to work in India upon completion of the course if you wish to avail of the internship guarantee benefits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. I am in the early years of college and will NOT be graduating in the next 12 months, can I still apply?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, if you have decided to make a career in full-stack development and are ready to put in the required time and effort to complete the course, you can still apply and we will evaluate your application based on its quality. You would be able to apply to the short-term or work-from-home internships that are published on Internshala.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. I have more than 3 years of work experience in a different field and now I want to switch to Full Stack Development, can I apply?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can. However, please note that the placement opportunities that we would be curating for the students of the Placement Guarantee course would be those of internships and the same will be made available to you too. Different companies may factor in your prior work experience in their hiring decisions differently and it will be at the sole discretion of the companies.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="contacts2" role="tabpanel" aria-labelledby="contacts2-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. Who is eligible to apply for the Placement Guarantee course?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The Placement Guarantee course program is meant for pre-final and final year students, recent graduates, and young professionals who wish to build a career in Full Stack Development. You should also be authorized and available to work in India upon completion of the course if you wish to avail of the internship guarantee benefits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. I am in the early years of college and will NOT be graduating in the next 12 months, can I still apply?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, if you have decided to make a career in full-stack development and are ready to put in the required time and effort to complete the course, you can still apply and we will evaluate your application based on its quality. You would be able to apply to the short-term or work-from-home internships that are published on Internshala.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. I have more than 3 years of work experience in a different field and now I want to switch to Full Stack Development, can I apply?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can. However, please note that the placement opportunities that we would be curating for the students of the Placement Guarantee course would be those of internships and the same will be made available to you too. Different companies may factor in your prior work experience in their hiring decisions differently and it will be at the sole discretion of the companies.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="contacts3" role="tabpanel" aria-labelledby="contacts3-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. Who is eligible to apply for the Placement Guarantee course?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The Placement Guarantee course program is meant for pre-final and final year students, recent graduates, and young professionals who wish to build a career in Full Stack Development. You should also be authorized and available to work in India upon completion of the course if you wish to avail of the internship guarantee benefits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. I am in the early years of college and will NOT be graduating in the next 12 months, can I still apply?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, if you have decided to make a career in full-stack development and are ready to put in the required time and effort to complete the course, you can still apply and we will evaluate your application based on its quality. You would be able to apply to the short-term or work-from-home internships that are published on Internshala.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. I have more than 3 years of work experience in a different field and now I want to switch to Full Stack Development, can I apply?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can. However, please note that the placement opportunities that we would be curating for the students of the Placement Guarantee course would be those of internships and the same will be made available to you too. Different companies may factor in your prior work experience in their hiring decisions differently and it will be at the sole discretion of the companies.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="contacts4" role="tabpanel" aria-labelledby="contacts4-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. Who is eligible to apply for the Placement Guarantee course?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The Placement Guarantee course program is meant for pre-final and final year students, recent graduates, and young professionals who wish to build a career in Full Stack Development. You should also be authorized and available to work in India upon completion of the course if you wish to avail of the internship guarantee benefits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. I am in the early years of college and will NOT be graduating in the next 12 months, can I still apply?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, if you have decided to make a career in full-stack development and are ready to put in the required time and effort to complete the course, you can still apply and we will evaluate your application based on its quality. You would be able to apply to the short-term or work-from-home internships that are published on Internshala.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. I have more than 3 years of work experience in a different field and now I want to switch to Full Stack Development, can I apply?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can. However, please note that the placement opportunities that we would be curating for the students of the Placement Guarantee course would be those of internships and the same will be made available to you too. Different companies may factor in your prior work experience in their hiring decisions differently and it will be at the sole discretion of the companies.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="contacts5" role="tabpanel" aria-labelledby="contacts5-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. Who is eligible to apply for the Placement Guarantee course?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The Placement Guarantee course program is meant for pre-final and final year students, recent graduates, and young professionals who wish to build a career in Full Stack Development. You should also be authorized and available to work in India upon completion of the course if you wish to avail of the internship guarantee benefits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. I am in the early years of college and will NOT be graduating in the next 12 months, can I still apply?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, if you have decided to make a career in full-stack development and are ready to put in the required time and effort to complete the course, you can still apply and we will evaluate your application based on its quality. You would be able to apply to the short-term or work-from-home internships that are published on Internshala.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. I have more than 3 years of work experience in a different field and now I want to switch to Full Stack Development, can I apply?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can. However, please note that the placement opportunities that we would be curating for the students of the Placement Guarantee course would be those of internships and the same will be made available to you too. Different companies may factor in your prior work experience in their hiring decisions differently and it will be at the sole discretion of the companies.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="contacts6" role="tabpanel" aria-labelledby="contacts6-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. Who is eligible to apply for the Placement Guarantee course?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The Placement Guarantee course program is meant for pre-final and final year students, recent graduates, and young professionals who wish to build a career in Full Stack Development. You should also be authorized and available to work in India upon completion of the course if you wish to avail of the internship guarantee benefits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. I am in the early years of college and will NOT be graduating in the next 12 months, can I still apply?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, if you have decided to make a career in full-stack development and are ready to put in the required time and effort to complete the course, you can still apply and we will evaluate your application based on its quality. You would be able to apply to the short-term or work-from-home internships that are published on Internshala.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. I have more than 3 years of work experience in a different field and now I want to switch to Full Stack Development, can I apply?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can. However, please note that the placement opportunities that we would be curating for the students of the Placement Guarantee course would be those of internships and the same will be made available to you too. Different companies may factor in your prior work experience in their hiring decisions differently and it will be at the sole discretion of the companies.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="contacts7" role="tabpanel" aria-labelledby="contacts7-tab">
                            <div class="course-content-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px">
                                                Q. Who is eligible to apply for the Placement Guarantee course?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                The Placement Guarantee course program is meant for pre-final and final year students, recent graduates, and young professionals who wish to build a career in Full Stack Development. You should also be authorized and available to work in India upon completion of the course if you wish to avail of the internship guarantee benefits.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                                Q. I am in the early years of college and will NOT be graduating in the next 12 months, can I still apply?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, if you have decided to make a career in full-stack development and are ready to put in the required time and effort to complete the course, you can still apply and we will evaluate your application based on its quality. You would be able to apply to the short-term or work-from-home internships that are published on Internshala.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px">
                                            Q. I have more than 3 years of work experience in a different field and now I want to switch to Full Stack Development, can I apply?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can. However, please note that the placement opportunities that we would be curating for the students of the Placement Guarantee course would be those of internships and the same will be made available to you too. Different companies may factor in your prior work experience in their hiring decisions differently and it will be at the sole discretion of the companies.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course details area end -->

    <!-- marquee area start -->
    <div class="marq-sliders">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="ticker">  
                        <div class="news"> 
                            <marquee class="news-content"> 
                                <p>Urgent! Course fees will increase by ₹12,000 soon. Apply now </p>
                                <p>Urgent! Course fees will increase by ₹12,000 soon. Apply now </p> 
                            </marquee> 
                        </div>    
                    </div>
                    <button type="button" class="rts-btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal" style="max-width: 100%; margin-top: 10px;">Apply Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- marquee area end -->

    <!-- footer call to action area start -->
    <div class="footer-callto-action-area bg-light-1">
        <div class="container">
            <div class="row  ptb--100">
                <div class="col-lg-12">
                    <div class="footer-one-main-wrapper">
                        <div class="footer-singl-wized left-logo">
                            <div class="head">
                                <a href="index">
                                    <img src="/images/logo/logo.png" width="200" alt="logo" loading="lazy">
                                </a>
                            </div>
                            <div class="body">
                                <p class="dsic">
                                    We are passionate education dedicated to providing high-quality resources learners
                                    all backgrounds.
                                </p>
                            </div>
                        </div>
                        <div class="footer-singl-wized">
                            <div class="head">
                                <h6 class="title">Quick Links</h6>
                            </div>
                            <div class="body">
                                <ul class="menu">
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Companies Hiring</a></li>
                                    <li><a href="#">Guaranteed Placement</a></li>
                                    <li><a href="#">Career Options</a></li>
                                    <li><a href="#">Certifications</a></li>
                                    <li><a href="#">Fees</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-singl-wized">
                            <div class="head">
                                <h6 class="title">Explore</h6>
                            </div>
                            <div class="body">
                               <ul class="menu">
    <li><a href="/policies/refund-policy.txt" target="_blank">Refund Policy</a></li>
    <li><a href="/policies/terms-conditions.txt" target="_blank">Terms & Conditions</a></li>
    <li><a href="/policies/privacyPolicy.txt" target="_blank">Privacy Policy</a></li>
</ul>

                            </div>
                        </div>
                        <div class="footer-singl-wized input-area">
                            <div class="head">
                                <h6 class="title">Newsletter</h6>
                            </div>
                            <div class="body">
                                <ul class="wrapper-list">
                                    <li><i class="fa-regular fa-location-dot"></i>Pune, Maharashtra, India. </li>
                                    <li><i class="fa-regular fa-phone"></i><a href="tel:+4733378901">+(91) 705-733-4660</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area-one-border">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-one">
                            <p>Copyright © 2025 <b> CodingShala India </b> All Rights Reserved.</p>
                            <div class="social-copyright">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer call to action area end -->


    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="#" class="main">Home</a>
                    </li>
                    <!-- <li class="has-droupdown">
                        <a href="index.html#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="about.html">About Us</a></li>
                            <li><a class="mobile-menu-link" href="about-two.html">About Us Two</a></li>
                            <li><a class="mobile-menu-link" href="instructor-profile.html">Profile</a></li>
                            <li><a class="mobile-menu-link" href="contact.html">Contact</a></li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="index.html#">Zoom</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="zoom-meeting.html"></a>Zoom Meeting</li>
                                    <li><a href="zoom-details.html"></a>Zoom Details</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="index.html#">Event</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="event.html"></a>Event</li>
                                    <li><a href="https://html.themewant.com/studyhub/event-two.html"></a>Event Two</li>
                                    <li><a href="event-details.html"></a>Event Details</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="index.html#">Shop</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="shop.html"></a>Shop</li>
                                    <li><a href="product-details.html"></a>Product Details</li>
                                    <li><a href="checkout.html"></a>Checkout</li>
                                    <li><a href="cart.html"></a>Cart</li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->

                    <!-- <li class="has-droupdown">
                        <a href="index.html#" class="main">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                            <li><a class="mobile-menu-link" href="blog-grid.html">Blog Grid</a></li>
                            <li><a class="mobile-menu-link" href="blog-list.html">Blog List</a></li>
                            <li><a class="mobile-menu-link" href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a class="mobile-menu-link" href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li> -->
                </ul>
            </nav>

            <div class="buttons-area">
                <a href="#" class="rts-btn btn-primary">Apply Now</a>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Application form</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="login-page-form-area">
                        <form method="POST">
                            <div class="single-input-wrapper">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name"  placeholder="Name" required >
                            </div>
                            <div class="single-input-wrapper">
                                <label for="name">Email</label>
                                <input type="email" name="email" id="email"  placeholder="Your Email" required >
                            </div>
                            <div class="single-input-wrapper">
                                <label for="name">Phone Number</label>
                                <input type="number" name="phone" id="phone" placeholder="Phone Number" required >
                            </div>
                            
                            <button class="rts-btn btn-primary" type="submit" name="submit" value="submit">Submit application</button> 
                            <p>By clicking on "Submit application", you agree to our <br> <a href="#">Terms and Conditions</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 

                    if(@$_POST['submit']){

                        $name       = trim($_POST['name']);
                        $email      = trim($_POST['email']);
                        $mobile     = trim($_POST['phone']);

                        if($name == "" || $email == "" || $mobile == ""){
                        
                            $_SESSION['failed'] ='<div class="alert alert-danger alert-dismissable">Name, Email, Mobile, Diseases fields can not be empty!<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>';
                            header('Location:index.php');
                            exit();

                        } elseif (!preg_match('/^[0-9]/', $mobile)) {
                        
                            $_SESSION['failed'] = '<div class="alert alert-danger alert-dismissable">Please provide valid Mobile No. !<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>';
                            header('Location:index.php');
                            exit();

                        } elseif (!ctype_alpha(str_replace(" ", "", $name))) {

                            $_SESSION['failed'] = '<div class="alert alert-danger alert-dismissable">Name must have only alphabates.<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>';
                            header('Location:index.php');
                            exit();
                        
                        } elseif(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$^",$email) ){

                            $_SESSION['failed'] = '<div class="alert alert-danger alert-dismissable">Please provide valid Email !<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>';
                            header('Location:index.php');
                            exit();                    
                        } else {
                            require 'mailer/PHPMailerAutoload.php';
        
                            $mail = new PHPMailer;
                            $mail->isSMTP();
                            $mail->Host       = 'smtp-relay.brevo.com';
                            $mail->SMTPAuth   = true;
                            $mail->Username   = '8f07bc001@smtp-brevo.com';
                            $mail->Password   = 'pyDmqfvZzFA2h3M4';
                            $mail->SMTPSecure = 'tls';
                            $mail->Port       = 58;

                            $mail->setFrom('salmansayyed6000@gmail.com', 'codingshala India');
                            $mail->addAddress('salmansayyed6000@gmail.com');

                            $mail->isHTML(true);
                            $mail->Subject = 'Enquiry Received';
                            $mail->Body    = "
                                <h4>Hello $name,</h4>
                                <p>Enquiry Details </p>
                                <p>Mobile : $mobile</p>
                                <p>Email : $email</p>
                            ";

                            $successMessage = "Application submitted successfully.";
                            if(!$mail->send()){
                                $_SESSION['success'] = '<div class="alert alert-success alert-dismissable">'.$successMessage.'!<a href="#" class="close" data-dismiss="alert" aria-label="close">&times; </a> </div>';
                             header('Location:index.php');
                             exit();
                            }else{
                            $successMessage = "Please submit again.";
                                $_SESSION['failed'] = '<div class="alert alert-danger alert-dismissable">'.$successMessage.' !<a href="#" class="close" data-dismiss="alert" aria-label="close">&times; </a> </div>';
                             header('Location:index.php');
                             exit();
                            }
                        }
                    }

                ?>


           


    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- rts backto top end -->


    <div id="anywhere-home" class="">
    </div>

    <!-- all scripts -->
    <script src="/js/vendor/jquery.min.js"></script>
    <script src="/js/vendor/jquery-ui.js"></script>
    <script src="/js/vendor/metismenu.js"></script>
    <script src="/js/vendor/magnifying-popup.js"></script>
    <script src="/js/plugins/swiper.js"></script>
    <script src="/js/plugins/counterup.js"></script>
    <script src="/js/vendor/waypoint.js"></script>
    <script src="/js/vendor/waw.js"></script>
    <script src="/js/plugins/isotop.js"></script>
    <script src="/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="/js/plugins/resizer-sensor.js"></script>
    <script src="/js/plugins/sticky-sidebar.js"></script>
    <script src="/js/plugins/twinmax.js"></script>
    <script src="/js/vendor/chroma.min.js"></script>
    <script src="/js/plugins/bootstrap.min.js"></script>
    <script src="/js/plugins/contact.form.js"></script>
    <script src="/js/plugins/calender.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
