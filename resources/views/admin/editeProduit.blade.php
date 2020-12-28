@extends('layouts.admin')
@section('content')
  

 <div class="card-body" style="padding: 50px">
   
<div class="tab-pane" >
  <div style="padding-left: 300px">
   
    @include('admin.includs.alerts.errors')
    @include('admin.includs.alerts.success')
  
    <h3>modifier votre produit : {{$produit->name}}</h3> </div>
    <div style="padding-left: 300px">
 <form style="padding-top: 50px"  class="form-horizontal" method="POST" action="{{url('admin/update/'.$produit->id)}}"  enctype="multipart/form-data">
      @csrf
    <div class="form-group row">
      <label for="inputName"  class="col-sm-2 col-form-label">nom de produit</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$produit->name}}" name="name" required id="inputName" placeholder="nom de produit">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">prix</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" value="{{$produit->price}}"  name="price" required id="inputEmail" placeholder="prix">
      </div>
    </div>
    <div class="form-group row" >
      <label for="inputEmail" class="col-sm-2 col-form-label">Produit en vedette?</label>
      <div class="col-sm-10">
      <input type="text" class="form-control"  name="vedatte" value="{{$produit->vedatte}}" required id="inputEmail" placeholder="oui ou no ">
      </div>
    </div>
    {{-- <div class="form-group row"  style="padding-left: 300px" >
      <label class="checkbox-inline"> <input class="form-check-input" type="radio" name="is_vedette" value="{{$produit->is_vedette}}" {{ $produit->is_vedette == "1"  ? 'checked' : ''}} >vedette</label>
    </div>                                        --}}
    {{-- <div class="form-group row">
      <label for="inputName2" class="col-sm-2 col-form-label"> produit vadette</label>
      <div class="col-sm-10">
       <select class="form-control" name="is_vedette" >
        <option {{$produit->is_vedette == 'no' ? 'selected' : ''  }}> no</option>
            <option {{$produit->is_vedette == 'oui' ? 'selected' : ''  }}>oui</option>
           
           
            </select>
      </div>
    </div> --}}
    <div class="form-group row">                                                                                                                                                             
      <label for="inputName2" class="col-sm-2 col-form-label">photo</label>
      <div class="col-sm-10">
        <img src="{{asset('storage/'.$produit->photo)}}" width="100" height="100">   {{-- {{asset('images/imageProduit/'.$produit->photo)}} --}}
        <input type="file" class="form-control"  name="photo" id="inputName2" placeholder="photo">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputName2" class="col-sm-2 col-form-label">detail de produit</label>
        <div class="col-sm-10">
        <textarea class="form-control"  required name="details"  rows="3">{{$produit->details}}</textarea>
        
        </div>
      </div>
      <div class="form-group row">
        <label for="inputName2" class="col-sm-2 col-form-label">categorie de produit</label>
        <div class="col-sm-10">
         <select class="form-control" name="categotieId" >
                @foreach ($categorie as $cat)
              <option  {{$cat->id == $produit->categorie_id ? 'selected' : ''}} value="{{$cat->id}}">{{$cat->name}}</option>
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