@extends('layouts.site')
@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
@if (Cart::count()>0)
    
@include('admin.includs.alerts.success')
<div class="cart-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-page-inner">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th> nom produit</th>
                                    <th> image</th>
                                    <th>prix</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>suprimmer</th>
                                </tr>
                            </thead>
                            @foreach (Cart::content() as $produit)
                                
                          
                            <tbody class="align-middle">

                                <tr>
                                    <td>
                                      
                                    <p>{{$produit->name}}</p>
                                    

                                    </td>
                                    <td>  <img src="{{asset('storage/'.$produit->options['photo'])}}" width="100" height="100"></td>
                                    <td>{{$produit->price}}</td>
                                    <td>
                                     
                                            {{-- <button class="btn-minus"><i class="fa fa-minus"></i></button> --}}
                                        <span >  {{$produit->qty}}
                                            {{-- <select name="qty" id="qty" data-id="{{$produit->id}}" class="custom-select" >
                                                @for($i=1;$i<=6;$i++)
                                            <option value="{{$i}}"  >{{$i}}</option>
                                            @endfor
                                            </select> --}}
                                            {{-- <button class="btn-plus"><i class="fa fa-plus"></i></button> --}}
                                        </span>
                                    </td>
                                    <td>{{$produit->qty*$produit->price}}</td>
                                <td><form action="{{route('cart.destroy',$produit->rowId)}}" method="post">
                                        @csrf
                                     
                                        <button type="submit" ><i class="fa fa-trash"></i></button></form>
                                    </td>
                                </tr>
                               
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>


 <div class="col-lg-4">
                <div class="cart-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="coupon">
                              <h4>detaile de la commende</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cart-summary">
                                <div class="cart-content">
                                    <h1>Cart Summary</h1>
                                <p>sous Total<span>{{ Cart::subtotal()}}</span></p>
                                    <p>tax <span>{{ Cart::tax()}}</span></p>
                                    <h2>Grand Total<span>{{ Cart::total()}}</span></h2>
                                </div>
                                <div class="cart-btn" >
                                <a class="btn btn-danger" href="{{route('cart.finshop')}}">fin de shop</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@else
<div style="padding-left: 150px">
     <strong>votre panier est vide</strong> 
</div>

@endif
    

@endsection


    

