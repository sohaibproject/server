@extends('layouts.site')

@section('content')
@include('admin.includs.alerts.success')
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            @foreach ($categorie as $cat)
                                
                          
                            <li class="nav-item">
     <a class="nav-link" style="font-family: fantasy ;font-size: 17px" href="{{url('admin/getproduitcategorie/'.$cat->id)}}"><i class="fa fa-list-alt"></i>{{$cat->name}}</a>
                            </li>
                            @endforeach
                           
                        </ul>
                    </nav>
                  
                </div>
             
                <div class="col-md-6">
                    <div class="header-slider normal-slider">
                        <div class="header-slider-item" >
                            <img src="img/slider-1.jpg"  alt="Slider Image"  style="width: 700px; height: 400px;" />
                           
                        </div>
                        <div class="header-slider-item">
                            <img src="img/slider-2.jpg" alt="Slider Image"  style="width: 700px; height: 400px;"/>
                            
                        </div>
                        <div class="header-slider-item">
                            <img src="img/slider-3.jpg" alt="Slider Image"  style="width: 700px; height: 400px;" />
                            
                        </div>
                        <div class="header-slider-item">
                            <img src="img/slider-4.jpg" alt="Slider Image"  style="width: 700px; height: 400px;" />
                            
                        </div>
                        <div class="header-slider-item">
                            <img src="img/slider-5.jpg" alt="Slider Image"  style="width: 700px; height: 400px;" />
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header-img">
                        <div class="img-item">
                            <img src="img/category-1.jpg" />
                           
                        </div>
                        <div class="img-item">
                            <img src="img/category-2.jpg" />
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->      
    
    <!-- Brand Start -->
    <div class="brand">
        <div class="container-fluid">
            <div class="brand-slider">
                <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- Brand End -->      
    
    <!-- Feature Start-->
    <div class="feature">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fab fa-cc-mastercard"></i>
                        <h2>Paiement sécurisé</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-truck"></i>
                        <h2>Livraison dans tout le pays</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-sync-alt"></i>
                        <h2>Livraison rapide</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-comments"></i>
                        <h2>Assistance 24/7</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->      
    
    <!-- Category Start-->
    <div class="category">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="img/category-3.jpg" />
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-250">
                        <img src="img/category-4.jpg" />
                       
                    </div>
                    <div class="category-item ch-150">
                        <img src="img/category-5.jpg" />
                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-150">
                        <img src="img/category-6.jpg" />
                       
                    </div>
                    <div class="category-item ch-250">
                        <img src="img/category-7.jpg" />
                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="img/category-8.jpg" />
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End-->       
    
    <!-- Call to Action Start -->
    <div class="call-to-action">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>appelez-nous pour toute question</h1>
                </div>
                <div class="col-md-6">
                    <a href="tel:+213-776950050">+213-776950050</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->
     <!-- Featured categorie Start -->
     <div class="featured-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>tout les categorie</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
            @foreach ($categorie  as $cat)
                    
               
                <div class="col-lg-2">
                    <div class="product-item">
                        <div class="product-title">
                        <a href="#">{{$cat->name}}</a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="">
                                <img src="{{asset('storage/'.$cat->photo)}}" alt="Product Image" style="width: 350px; height: 400px;">
                            </a>
                         
                        </div>
                        <div class="product-price">
                            <h3><span></span></h3>
                        <a class="btn" href="{{url('admin/getproduitcategorie/'.$cat->id)}}"><i class="fa fa-shopping-cart"></i>Voir les produits</a> 
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured Product End -->         
    
    <!-- Featured Product Start -->
    <div class="featured-product product" id="produit">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Produit en vedette</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
            @foreach ($produit as $pro)
                    
          
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                        <a href="">{{$pro->name}}</a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                        <a href="{{url('admin/getproduitdetail/'.$pro->id)}}">
                                <img src="{{asset('storage/'.$pro->photo)}}" alt="Product Image" style="width: 350px; height: 400px;">
                            </a>
                         
                        </div>
                        <div class="product-price">
                        <h3>{{$pro->price}}<span>da</span></h3>
                            {{-- <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured Product End -->       
    
    <!-- Newsletter Start -->
    {{-- <div class="newsletter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1>Subscribe Our Newsletter</h1>
                </div>
                <div class="col-md-6">
                    <div class="form">
                        <input type="email" value="Your email here">
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Newsletter End -->        
    
    <!-- Recent Product Start -->
    <div class="recent-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Produit récent</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                @foreach ($produit_recent as $pro_recent)
                    
             
                <div class="col-lg-12">
                    <div class="product-item">
                        <div class="product-title">
                        <a href="#">{{$pro_recent->name}}</a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                {{-- <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> --}}
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="{{url('admin/getproduitdetail/'.$pro_recent->id)}}">
                                <img src="{{asset('storage/'.$pro_recent->photo)}}" alt="Product Image" style="width: 350px; height: 400px;">
                            </a>
                           
                        </div>
                        <div class="product-price">
                        <h3>  {{$pro_recent->price}}<span>da</span></h3>
                            {{-- <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Recent Product End -->
    
    <!-- Review Start -->
    <div class="review">
        <div class="container-fluid">
            <div class="row align-items-center review-slider normal-slider">
               
                @foreach ($opinion as $opinion)
                    
                
                <div class="col-md-6">
                    <div class="review-slider-item">
                        <div class="review-img">
                <img src="{{asset('storage/'.$opinion->photo)}}" alt="Product Image" style="width: 200px; height: 200px;">

                        </div>
                        <div class="review-text">
                        <h2>{{$opinion->name}}</h2>
                            <h3>Profession</h3>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>
                                {{$opinion->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

@endsection

