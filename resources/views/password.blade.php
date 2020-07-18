<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend//css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{URL::Route('Profile')}}">Profile</a></li>
                                        <li><a href="{{URL::Route('Password')}}">Change Password</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>

    <!-- Hero Start -->

    <!-- Hero End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Change Password</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form"  id="profile" >
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="password" id="name" value="" type="text"  placeholder="Enter your new password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="confirm_password" value="" id="email" type="text" placeholder = "Confirm Password ">
                                </div>
                            </div>

                        </div>
                        <div class="form-group mt-3">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <input type="hidden" class="form-control" name="user_id" value="">
                            <button type="submit" class="button button-contactForm boxed-btn">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="footer-top-cap text-center">
                            <img src="assets/img/logo/logo2_footer.png" alt="">
                            <span><a href="#">hireme@portfolio.com</a></span>
                            <p>221B Baker Street, Post office Box 353 </p>
                            <p>Park Road, USA - 215431</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a>Stay Connected</a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('assets/frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('assets/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('assets/frontend/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('assets/frontend/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/animated.headline.js')}}"></script>
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.js')}}"></script>

<!-- Nice-select, sticky -->
<script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/jquery.sticky.js')}}"></script>

<!-- contact js -->
<script src="{{ asset('assets/frontend/js/contact.js')}}"></script>
<script src="{{ asset('assets/frontend/js/jquery.form.js')}}"></script>
<script src="{{ asset('assets/frontend/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/mail-script.js')}}"></script>
<script src="{{ asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('assets/frontend/js/plugins.js')}}"></script>
<script src="{{ asset('assets/frontend/js/main.js')}}"></script>
<script>

    $(document).ready(function() {

        $("#profile").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                },

            },

            errorPlacement: function(error, element) {

                console.log(element.attr('name'));
                $( error ).insertAfter( element);
            },
            submitHandler: function(form) {

                // do other things for a valid form
                var formData = $("#profile").serialize();

                $.ajax({
                    type: 'post',
                    url: '{{ URL::route("PostPassword") }}',
                    data: formData,
                    success: function(data){
                        if(data.status == 1){

                            setInterval(function () {
                                window.location.href = '{{ URL::route('home') }}';
                            }, 1500);
                        }


                    }
                });




                return false;
            }
        });


    });

</script>
</body>

</html>
