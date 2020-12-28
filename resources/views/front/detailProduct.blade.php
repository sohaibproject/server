@extends('layouts.site')

@section('content')
<div class="product-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="product-detail-top">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            {{-- <div class="product-slider-single normal-slider"> --}}
           <img src="{{asset('storage/'.$produit->photo)}}" alt="Product Image" style="width: 350px; height: 400px;">
                             
                            {{-- </div> --}}
                            
                        </div>
                        <div class="col-md-7">
                            <div class="product-content">
                            <div class="title"><h2>{{$produit->name}}</h2></div>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="price">
                                    <h4>Price:</h4>
                                    <p>{{$produit->price}}</p>
                                </div>
                                <form action="{{route('cart.stor')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$produit->id}}">
                                <div class="quantity">
                                    <h4>Quantity:</h4>
                                    <select name="qty" id="qty"  class="custom-select" >
                                        @for($i=1;$i<=6;$i++)
                                    <option value="{{$i}}"  >{{$i}}</option>
                                    @endfor
                                    </select>
                                </div>
                           
                            
                            {{-- <input type="hidden" name="qty" value="qty"> --}}
                          
                          
                            <button class="btn btn-danger"><i class="fa fa-shopping-cart"></i> ajouter au panier</button>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row product-detail-bottom">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#description">La description</a>
                            </li>
                            
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="container tab-pane active">
                                <h4>La description du produit</h4>
                                <p>
                                    {{$produit->details}}
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
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
    

@endsection