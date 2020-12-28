@extends('layouts.admin')
@section('content')
<div class="tab-pane" >
    <div style="padding-left: 300px">
                    
   @include('admin.includs.alerts.errors')
   @include('admin.includs.alerts.success')
    
    
    <h3>tout les produit</h3> </div>
  
     <div class="container" style="padding: 50px">
   
    <table class="table table-bordered">
      <thead>                  
        <tr>
          <th style="width: 10px">id produit</th>
          <th scope="col">nom produit</th>
          <th scope="col">prix produit</th>
          <th scope="col" >image produit</th>
          <th scope="col">detail produit</th>
          <th scope="col">category produit</th>
          <th scope="col"> vedette</th>
          <th  colspan="2">les operation</th>
        </tr>
      </thead>

      @foreach ($produit as $pro)
          
     
      <tbody>
        <tr>
        <td>{{$pro->id}}</td>
        <td>{{$pro->name}}</td>
        <td>{{$pro->price}}</td>
        <td><img src="{{asset('storage/'.$pro->photo)}}" width="100" height="100"></td>
        <td>{{$pro->details}}</td>                                                                           
        
        <td>{{$pro->categorie->name}}</td>
        <td>{{$pro->vedatte}}</td>
        <td><a href="{{url('admin/editeProduit/'.$pro->id)}}" ><i class="fa fa-edit" style="font-size:48px;color:rgb(0, 255, 42)"></i></a></td> 
        <td >       <a href="{{url('admin/deleteProduit/'.$pro->id)}}"  onclick="return confirm('Voulez-vous vraiment le supprimer?');" ><i class='fas fa-trash-alt' style='font-size:48px;color:red'></i></a> </td> 
       
    
        </tr>
      
      </tbody>
      @endforeach
    </table>
    {{$produit->links()}}
  </div>
</div>


 
 






    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

       <script type="text/javascript">
      
    $('.show_confirm').click(function(e) {
        if(!confirm('Voulez-vous vraiment le supprimer?')) {
            e.preventDefault();
        }
    });
    
</script>

  
{{-- }
  
  }
  </script>
   --}}
    
    
@endsection