@extends('layout')

<section class="home-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-2">
                <div class="logo">
                    <img src="/images/LMCORREA_logo.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-10"></div>
        </div>
    </div>

</section>

<section class="login-main">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <h1 class="mb-5">Login</h1>
                <form class="mb-5" action="{{url('loginpost')}}" method="post">
                @csrf    
                <div class="mb-3">
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Log In</button>
                </form>
                <a href="#" class="mt-3">Forgot Username or Password?</a>
            </div>
            <div class="col-xl-6 p-0">
                <img src="/images/IMG_0860.jpg" alt="banner">
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
                    <li><a href="#">FINRA's Broke Check</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Disclosures</a></li>
                    <li><a href="#">Member SIPC</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>