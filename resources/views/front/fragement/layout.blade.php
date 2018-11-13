<!DOCTYPE html>
<html lang="en">
<title>SV Developer</title>
<style>
    #header {

        position: fixed;
        top: 0;
        width: 100%;
        transition: 0.2s;
        background-color:  #f2f2f2;
        height: 100px;
        z-index: 1;
        padding: 0px;


    }


</style>

<head>

    @include('front.fragement.style')

</head>
<body>

    <div class="container-fluid" id="header">
                <nav class="navbar navbar-expand-lg navbar-light" style="margin-left: 5%">
                    <a class="navbar-brand"  href="/"><img id="logo" src="/images/logo.png" width="100%"></a>


                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto " style="margin-right: 5%">

                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/')}}" >Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#one">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact-us')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>


    </div><!----end logo----->



    @yield('content1')


    <!-- Footer -->
    <section id="footer" >
        <div class="container" style="margin-top: -40px" >
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <a href="{{url('/about-us')}}"><h5>About Us</h5></a>
                    <p class="footer-text">We are uniquely qualified Company offering Professional Web Design and Digital Marketing in Cambodia.</p>

                    <h5>Language</h5>
                    <ul>
                        <a href=""><li>English</li></a>
                        <a href=""><li>ខ្មែរ</li></a>

                    </ul>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Feature Services</h5>
                    <ul>
                        <li class="footer-text">Professional Web Design</li>
                        <li class="footer-text">Web Application</li>
                        <li class="footer-text">Windows base Application</li>
                        <li class="footer-text">Logo Design</li>
                        <li class="footer-text">Stock Management System</li>
                        <li class="footer-text">Camera Security</li>

                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Get in Touch</h5>
                    <p class="footer-text">SV Technologies</p>
                    <p class="footer-text">Phone: 010 254 294</p>
                    <p class="footer-text">Email: svtechnologieskh@gmail.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/roushuncambodia" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">© 2018, SV Developers, All Rights Reserved.</p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- ./Footer -->


@include('front.fragement.footerjs')
</body>
</html>
