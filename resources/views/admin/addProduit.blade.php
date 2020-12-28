@extends('layouts.admin')
@section('content')
  

 <div class="card-body" style="padding: 50px">
   
<div class="tab-pane" >
  <div style="padding-left: 300px">
    @include('admin.includs.alerts.errors')
    @include('admin.includs.alerts.success')
  <h3>add votre produit</h3> 
</div>
   <div style="padding-left: 300px">
 <form  class="form-horizontal" method="POST" action="{{route('produit.stor')}}"  enctype="multipart/form-data">
      @csrf
    <div class="form-group row">
      <label for="inputName"  class="col-sm-2 col-form-label">nom de produit</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="name" required id="inputName" placeholder="nom de produit">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">prix</label>
      <div class="col-sm-10">
        <input type="number" class="form-control"  name="price" required id="inputEmail" placeholder="prix">
      </div>
    </div>


    <div class="form-group row" >
      <label for="inputEmail" class="col-sm-2 col-form-label">Produit en vedette?</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  name="vedatte" required id="inputEmail" placeholder="oui ou no ">
      </div>
    </div>
    {{-- <div class="form-check">
      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
      <label class="form-check-label" for="gridRadios1">
        First radio
      </label>
    </div> --}}
    {{-- <div class="form-group row"  style="padding-left: 300px" >
    <label class="checkbox-inline"><input class="form-check-input"  type="radio" name="is_vedette">vedette</label> 
   </div> --}}
   {{-- <div class="form-group row">
    <label for="inputName2" class="col-sm-2 col-form-label"> produit vadette</label>
    <div class="col-sm-10">
     <select class="form-control" name="is_vedette" >
           
          <option>oui</option>
          <option> no</option>
         
          </select>
    </div>
  </div> --}}
    <div class="form-group row">
      <label for="inputName2" class="col-sm-2 col-form-label">photo</label>
      <div class="col-sm-10">
        <input type="file" class="form-control"  required name="photo" id="inputName2" placeholder="photo">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputName2" class="col-sm-2 col-form-label">detail de produit</label>
        <div class="col-sm-10">
        <textarea class="form-control" required name="details"  placeholder="detail de produit" rows="3"></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputName2" class="col-sm-2 col-form-label">categorie de produit</label>
        <div class="col-sm-10">
         <select class="form-control" name="categotieId" >
                @foreach ($categorie as $cat)
              <option value="{{$cat->id}}">{{$cat->name}}</option>
              @endforeach
              </select>
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