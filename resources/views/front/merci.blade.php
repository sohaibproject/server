@extends('layouts.site')

@section('content')

   
   
        @include('admin.includs.alerts.errors')
        @include('admin.includs.alerts.success')
      
  
    <div class="jumbotron text-center">
      <h1 class="display-3">merci!</h1>
      <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
      <hr>
     
      <p class="lead">
      <a class="btn btn-primary btn-sm" href="{{route('get.site')}}" role="button">Continue to homepage</a>
      </p>
    </div>

    
    

@endsection
