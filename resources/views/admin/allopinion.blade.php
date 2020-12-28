@extends('layouts.admin')
@section('content')
<div class="tab-pane" >
    <div style="padding-left: 300px">
                    
   @include('admin.includs.alerts.errors')
   @include('admin.includs.alerts.success')
    
    
    <h3>tout les opinion</h3> </div>
<div class="container" style="padding: 50px">
   
    <table class="table table-bordered">
      <thead>                  
        <tr>
          <th style="width: 10px">id clien</th>
          <th scope="col">nom clien</th>
          
          <th scope="col" >image clien</th>
          <th scope="col">description clien</th>
         
          <th  colspan="2">les operation</th>
        </tr>
      </thead>

      @foreach ($opinion as $opinion)
          
     
      <tbody>
        <tr>
        <td>{{$opinion->id}}</td>
        <td>{{$opinion->name}}</td>
        
        <td><img src="{{asset('storage/'.$opinion->photo)}}" width="100" height="100"></td>
        <td>{{$opinion->description}}</td>  

         <td><a href="{{url('admin/editeopinion/'.$opinion->id)}}" ><i class="fa fa-edit" style="font-size:48px;color:rgb(0, 255, 42)"></i></a></td> 
        <td >       <a href="{{url('admin/deleteopinion/'.$opinion->id)}}"  onclick="return confirm('Voulez-vous vraiment le supprimer?');" ><i class='fas fa-trash-alt' style='font-size:48px;color:red'></i></a> </td> 
       
    
        </tr>
      
      </tbody>
      @endforeach
    </table>
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