{{-- @extends('templates.app')
<section style="background-color: #dede1c;">
  <div class="container my-5 py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(21).webp" alt="avatar" width="65"
                height="65" />
              <div class="w-100">
                <h5>Add a category</h5>
                  <form action="{{route('category.store')}}" method="post">
                    @csrf

                    <div class="dropdown show ">
                      
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                      </a>
                    
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    <label for="cars">Choose a car:</label>
                    <input type="text" name = "category">
                    <div class="d-flex justify-content-between mt-3">
                      <button class="btn btn-success btn-lg active" type="submit " aria-pressed="true"> Add </button>
                      <a href="" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">
                        Delet <i class="fas fa-long-arrow-alt-right ms-1"></i>
                      </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
@extends('templates.app')
  @auth
    @section('nav_content')
        @include('includes.navbar')
    @endsection

    @section('state')
        log out
    @endsection
  @endauth

  @section('state')
      log in
  @endsection

  @section('content')
    @include('includes.create_category')
  @endsection

