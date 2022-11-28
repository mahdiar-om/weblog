
@extends('templates.app')
@extends('templates.post')

@section('posts')
<h2 class = "ms-1">{{$post->title}}</h2>
<h6 class = "ms-1">{{$post->text}}</h6><br>
        @foreach($post->comments as $comment)
            <p>{{$comment->user->name}}:</p>
            <div class="card mb-4">
                <div class="card-body">
                  <p>{{$comment->comment}}</p>
    
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <p class="small mb-0 ms-2">{{$comment->user->name}}</p>
                    </div>
                  </div>
                </div>
              </div>
        @endforeach
@endsection