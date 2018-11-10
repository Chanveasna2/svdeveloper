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

                {{--<a href="#"><img src="/images/kh.png" width="40px" class="img-fluid language"></a>&nbsp;--}}
                {{--<a href="#"><img src="/images/en.png" width="40px" class="img-fluid language"></a>--}}

                <nav class="navbar navbar-expand-lg navbar-light" style="margin-left: 5%">
                    <a class="navbar-brand"  href="/"><img id="logo" src="/images/logo.png" width="100%"></a>


                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                        <ul class="navbar-nav">
                            <li class="nav-item" style="float: right">
                                <a class="nav-link active" href="#" >Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
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
                    <h5>About Us</h5>
                    <p>We are uniquely qualified Company offering Professional Web Design and Digital Marketing in Cambodia.</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Feature Services</h5>
                    <ul>
                        <li>Professional Web Design</li>
                        <li>Web Application</li>
                        <li>Windows base Application</li>
                        <li>Logo Design</li>
                        <li>Stock Management System</li>
                        <li>Camera Security</li>

                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Get in Touch</h5>
                    <p>SV Technologies</p>
                    <p>Phone: 010 254 294</p>
                    <p>Email: svtechnologieskh@gmail.com</p>
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
