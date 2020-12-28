@extends('layouts.admin')
@section('content')
<div class="tab-pane" >
  <div style="padding-left: 300px">
                  
 @include('admin.includs.alerts.errors')
 @include('admin.includs.alerts.success')
  
  
  <h3>tout les Évaluation</h3> </div>

   <div class="container" style="padding: 50px">
 
  <table class="table table-bordered">
    <thead>                  
      <tr>
        <th style="width: 10px">nom de client</th>
        <th scope="col">email client</th>
        <th scope="col">discription client</th>
        <th scope="col">supprimer</th>
       
      </tr>
    </thead>

    @foreach ($client as $client)
        
   
    <tbody>
      <tr>
      <td>{{$client->name}}</td>
      <td>{{$client->email}}</td>
      <td>{{$client->discription}}</td>
      <td > <a href="{{route('client.delete',$client->id)}}"><i class='fas fa-trash-alt' style='font-size:48px;color:red'></i></a> </td> 

    </tr>
    
    </tbody>
    @endforeach
  </table>
  {{-- {{$produit->links()}} --}}
</div>


 

    
@endsection