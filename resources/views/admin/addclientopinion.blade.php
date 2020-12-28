@extends('layouts.admin')
@section('content')
  

 <div class="card-body" style="padding: 50px">
   
<div class="tab-pane" >
  <div style="padding-left: 300px">
    @include('admin.includs.alerts.errors')
    @include('admin.includs.alerts.success')
  <h3>add Avis client</h3> 
</div>
   <div style="padding-left: 300px">
 <form  class="form-horizontal" method="POST" action="{{route('stor.opinion')}}"  enctype="multipart/form-data">
      @csrf
    <div class="form-group row">
      <label for="inputName"  class="col-sm-2 col-form-label">nom de clien</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="name" required id="inputName" placeholder="nom de clien">
      </div>
    </div>
 
    <div class="form-group row">
      <label for="inputName2" class="col-sm-2 col-form-label">photo</label>
      <div class="col-sm-10">
        <input type="file" class="form-control"  required name="photo" id="inputName2" placeholder="photo">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputName2" class="col-sm-2 col-form-label">	description </label>
        <div class="col-sm-10">
        <textarea class="form-control" required name="description"  placeholder="description" rows="3"></textarea>
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
</div>
 



    
@endsection