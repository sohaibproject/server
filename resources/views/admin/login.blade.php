<!DOCTYPE html>
<html>
<head>
	<title> login form</title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('logincss/css.css')}}">
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet">
	  <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">  
      <link href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet"> 
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
            
                    <form class="box" action="{{route('login.post')}}" method="post" novalidate>
                    @csrf    
                    @include('admin.includs.alerts.errors')
                    @include('admin.includs.alerts.success')
               
                        <h1>Login</h1>
                        <p class="text-muted"> S'il vous plait entrez votre email et mot de passe!</p> 
                        <input type="text" name="email"  placeholder="email" required>
                        {{-- @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> --}}
                        @error('email')
                        <small  class="form-text text-danger">{{$message}}</small>
                            @enderror
                    {{-- @enderror --}}
                         <input type="password" name="password"  placeholder="mot de passe" required>
                         @error('password')
                         <small  class="form-text text-danger">{{$message}}</small>
                             @enderror
                          {{-- <a class="forgot text-muted" href="#">Mot de passe oublié?</a>  --}}
                          <br>
                          <br>
                         
                          {{-- <button type="submit" class="btn btn-success" name="" value="Login"> login</button> --}}
                          <button type="submit" class="btn btn-outline-danger" style="border-radius: 30% ; width:120px">login</button>
                        {{-- <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
