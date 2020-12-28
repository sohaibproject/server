@extends('layouts.site')

@section('content')
<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($produitcategorie as $produitcategorie)
                        
                  
                    
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-title">
                            <a href="#">{{$produitcategorie->name}}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="{{url('admin/getproduitdetail/'.$produitcategorie->id)}}">
                                    <img src="{{asset('storage/'.$produitcategorie->photo)}}" alt="Product Image" style="width: 350px; height: 400px;">

                                </a>
                               
                            </div>
                            <div class="product-price">
                            <h3>{{$produitcategorie->price}}<span>da</span></h3>
                            
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Pagination Start -->
               
                <!-- Pagination Start -->
            </div>           
            
            <!-- Side Bar Start -->
            <div class="col-lg-4 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Category</h2>
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            @foreach ($cat as $cat)
                                
                          
                            <li class="nav-item">
                            <a class="nav-link"  style="font-family: fantasy ;font-size: 17px" href="{{url('admin/getproduitcategorie/'.$cat->id)}}"><i class="fa fa-list-alt"></i>{{$cat->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                
                
               
            </div>
            <!-- Side Bar End -->
        </div>
    </div>
</div>
    

@endsection
