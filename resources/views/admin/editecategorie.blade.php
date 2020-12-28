@extends('layouts.admin')
@section('content')
  

 <div class="card-body" style="padding: 50px">
   
<div class="tab-pane" >
  <div style="padding-left: 300px">
    @include('admin.includs.alerts.errors')
    @include('admin.includs.alerts.success')
  <h3>modifier votre categorie</h3> 
</div>
   
 <form style="padding-top: 100px"  class="form-horizontal" method="POST" action="{{url('admin/updatecategorie/'.$categorie->id)}}"  enctype="multipart/form-data">
      @csrf
    <div class="form-group row">
      <label for="inputName"  class="col-sm-2 col-form-label">nom de categorie</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$categorie->name}}" name="name" required id="inputName" placeholder="nom de categorie">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputName2" class="col-sm-2 col-form-label">photo</label>
      <div class="col-sm-10">
        <img src="{{asset('storage/'.$categorie->photo)}}" width="100" height="100"> 
        <input type="file" class="form-control"  required name="photo" id="inputName2" placeholder="photo">
      </div>
    </div>
   
   <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
 



    
@endsection