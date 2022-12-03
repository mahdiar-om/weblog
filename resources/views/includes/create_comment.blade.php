@extends('templates.post')
    @section('content')
    <div class="container my-4 py-4 text-dark">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-6">
          <div class="card">
            <div class="card-body p-4">
              <div class="d-flex flex-start w-100">
                <div class="w-100">
                    {{-- comment --}}
                    <h2>{{$post->user->name}}</h2>
                    <h4>{{$post->title}}</h4>
                    <p class = "ps-3">{{$post->text}}</p>

                    <form action="{{route('comment.store')}}" method="post">
                      @csrf
                      <div class="form-outline">
                        <input type="hidden" name="id" value= {{$id}}> 
                        <textarea class="form-control" name="comment" rows="4" placeholder="Type your post ..."></textarea>
                      </div>
                      <div class="d-flex justify-content-between mt-3">
                        <button class="btn btn-success btn-lg active" type="submit " aria-pressed="true"> Send </button>
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
    @endsection