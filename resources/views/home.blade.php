@extends('layout')


<section class="home-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-2">
                <div class="logo">
                    <img src="/images/LMCORREA_logo.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-10">
                <nav>
                    <ul class="d-flex list-unstyled justify-content-around">
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Services We Offer</a></li>
                        <li><a href="#">How To Get Starter</a></li>
                        <li><a href="{{url('login')}}">Client Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</section>
<section class="home-carosel">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="/images/IMG_2300.jpg" class=" w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="/images/IMG_2365.jpg" class=" w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="/images/IMG_3529.jpg" class=" w-100" alt="...">
        </div>
    </div>
    </div>
</section>

<section class="home-content text-center py-5">
   <div class="container">
        <h1 class="mb-3">Wealth Management </h1>
        <h2 class="mb-4">Personalized Services</h2>
        <p class="mb-5">We offer personalized investment advice to meet your financial needs for today and the future.</p>
        <div class="row align-items-center">
            <div class="col-xl-6">
                <p>Not sure how to get started?</p>
            </div>
            <div class="col-xl-6">
                <button type="button" class="btn btn-success btn-lg">Contact Us</button>
            </div>
        </div>
        
   </div>
</section>


<section class="home-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <ul class="d-flex">
                    <li><a href="#"><span><i class="fa fa-facebook-official"></i></span></a></li>
                    <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                    <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                    <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                    <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                </ul>
            </div>
            <div class="col-xl-6">
                <ul class="d-flex justify-content-end social"  >
                    <li><a href="#"><span>FINRA's Broke Check</span></a></li>
                    <li><a href="#"><span>Privacy Policy</span></a></li>
                    <li><a href="#">Disclosures<span></span></a></li>
                    <li><a href="#">Member SIPC<span></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>