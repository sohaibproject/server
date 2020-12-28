@extends('layouts.admin')
@section('content')

   
@endphp
<div class="tab-pane" >
  <div style="padding-left: 300px">
                  
 @include('admin.includs.alerts.errors')
 @include('admin.includs.alerts.success')
  
  
  <h3>tout les order</h3> </div>

   <div class="container" style="padding: 50px">
 
  <table class="table table-bordered" style="width: 100%">
    <thead>                  
      <tr>
        <th style="width: 10px">nom de client</th>
        <th scope="col">phone client</th>
        <th scope="col">montant</th>
        <th>commende demendant </th>
        <th>image commende </th>
       <th scope="col">created_at</th>
        <th scope="col">supprimer</th>
       
      </tr>
    </thead>
 

    @foreach ($order as $order)
        
    
    <tbody>
      <tr>
      <td>{{$order->name}}</td>
      <td>{{$order->mobile}}</td>
      <td>{{$order->montant}}</td>
      <td>
      @foreach ($order->produits as $item)
          <label for="">nom produit:  </label><span>{{$item['0']}}</span><br>
        <label for="">prix produit:  </label> <span>{{$item['1']}}da</span> <br>
        <label for="">Quantité produit:  </label> <span>{{$item['2']}}</span><br>
        <p>---------------------------------------------------------------------</p>
      
      @endforeach
    </td>
    <td>
      @foreach ($order->photo as $item)
          {{-- <span>{{$item['0']}}</span><br> --}}
          <img src="{{asset('storage/'.$item['0'])}}" width="100" height="100">
        <p>------------------------------------------------------</p>
      
      @endforeach
    </td>
      
      <td>{{$order->created_at}}</td>
  <td > <a href="{{route('order.delete',$order->id)}}"><i class='fas fa-trash-alt' style='font-size:48px;color:red'></i></a> </td> 

    </tr>
    
    </tbody>
    @endforeach
  </table>
  {{-- {{$produit->links()}} --}}
</div>
 



    
@endsection