@extends('layouts.site')

@section('content')

<div class="card-body" style="padding: 50px">
   
    <div class="tab-pane" >
      <div style="padding-left: 300px">
        @include('admin.includs.alerts.errors')
        @include('admin.includs.alerts.success')
      <h3>add votre information</h3> 
    </div>
    <div style="padding-left: 300px">
    <form  class="form-horizontal" action="{{route('cart.finstor')}}" method="POST"  enctype="multipart/form-data">
             @csrf
           <div class="form-group row">
             <label  class="col-sm-2 col-form-label">votre nom</label>
             <div class="col-sm-10">
             <input type="text" class="form-control" name="name" required id="inputName" placeholder="name">
             </div>
           </div>
           <div class="form-group row">
             <label for="inputEmail" class="col-sm-2 col-form-label">mobile</label>
             <div class="col-sm-10">
               <input type="number" class="form-control"  name="mobile" required id="inputEmail" placeholder="mobile">
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
