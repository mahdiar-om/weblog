@extends('templates.app')

@extends('templates.post')
@section('name')
    
@section('posts')
  @foreach ($posts as $post)
    
    <div class="card mb-4">
      <div class="card-body">
        <p>{{$post['text']}}</p>

        <div class="d-flex justify-content-between">
          <div class="d-flex flex-row align-items-center">
            <p class="small mb-0 ms-2">{{$post['name']}}</p>
          </div>
          <div class="d-flex flex-row align-items-center">
            <li><a href = '#' class="small text-muted mb-0">Comment</a></li>
            <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
            <li><a href="" class="small text-muted mb-0">View all comment</a></li>
          </div>
        </div>
      </div>
    </div>

    @endforeach
@endsection