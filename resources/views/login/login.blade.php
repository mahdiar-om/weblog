@extends('templates.login_box')
@extends('templates.app')
@section('information')
<div class="mb-md-5 mt-md-4 pb-5">
  
    <h2 class="fw-bold mb-2 text-uppercase">login</h2>
    <p class="text-white-50 mb-5">Please enter your email and password!</p>
  <form action= "{{route('login')}}" method="POST">

     @csrf 
     
    <div class="form-outline form-white mb-4">
      <input type="email" name="email" class="form-control form-control-lg" />
      <label class="form-label" for="typeEmailX">Email</label>
    </div>

    <div class="form-outline form-white mb-4">
      <input type="password" name="password" class="form-control form-control-lg" />
      <label class="form-label" for="typePasswordX">Password</label>
    </div>

    <button class="btn btn-outline-light btn-lg px-5" type="submit">login</button>
  </form>
    <div class="d-flex justify-content-center text-center mt-4 pt-1">
      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
    </div>

  </div>

  <div>
    <p class="mb-0">have an account? <a href="{{route('sign-up-page')}}" class="text-white-50 fw-bold">sign up</a>
    </p>
  </div>
@endsection
