<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> cosmetique </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">
        @yield('extra-meta')

        <!-- Favicon -->
    <link href="{{URL::asset('img/favicon.ico')}}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{URL::asset('lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{URL::asset('lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        {{-- <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        support@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +213-676964248
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End --> --}}
        
        <!-- Nav Bar Start -->
        
           @include('front.includs.navbar')
       
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        
           @include('front.includs.bottombar')
      
        <!-- Bottom Bar End -->
        {{-- @if (request()->input())
    <h6>{{$produits->total()}} resultat(s) pour le recherche {{request()->query}}</h6> 
        @endif        --}}
        <main class="py-4">
            @yield('content')
        </main>

              
        <!-- Contact Start -->
       
            @include('front.includs.contacts')
       
        <!-- Contact End -->
        <!-- Footer Start -->
        {{-- <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                   
                </div>
                
               
            </div>
        </div> --}}
             
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{URL::asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{URL::asset('lib/slick/slick.min.js')}}"></script>           
        
        <!-- Template Javascript -->
    <script src="{{URL::asset('js/main.js')}}"></script>
    @yield('extra-js')
    </body>
</html>
