@extends('layouts.site')

@section('content')

@if ($produits->count()>0)
    


<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($produits as $produit)
                        
                  
                    
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-title">
                            <a href="#">{{$produit->name}}</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="{{url('admin/getproduitdetail/'.$produit->id)}}">
                                    <img src="{{asset('storage/'.$produit->photo)}}" alt="Product Image" style="width: 350px; height: 400px;">

                                </a>
                               
                            </div>
                            <div class="product-price">
                            <h3>{{$produit->price}}<span>da</span></h3>
                            
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{$produits->appends(request()->input())->links()}}
                    {{-- {{$produit->links()}} --}}
                </div>
                
                <!-- Pagination Start -->
                {{-- <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
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
                            <a class="nav-link" href="{{url('admin/getproduitcategorie/'.$cat->id)}}"><i class="fa fa-list-alt"></i>{{$cat->name}}</a>
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
@else
        
    <div class="jumbotron text-center">
        <h1 class="display-3">desoly! pas resultat(s) pour le recherche </h1>
       
        <hr>
       
        <p class="lead">
        <a class="btn btn-primary btn-sm" href="{{route('get.site')}}" role="button">Continue to homepage</a>
        </p>
      </div> 
@endif

    

@endsection
