
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
  @extends('templates.app')
    @section('content')
      @extends('templates.post')
          
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
                    <li><a href = "/comment/create/{{$post->id}}" class="small text-muted mb-0">Comment</a></li>
                  <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                  <form action="{{route('posts.store')}}" method="POST">  
                    @csrf 
                    <input type="text" value="{{$post->id}}" name = "id" hidden>
                    <li><a href="posts/{{$post->id}}" class="small text-muted mb-0">View all comment</a></li>
                  </form>

                </div>
              </div>
            </div>
          </div>

          @endforeach
      @endsection
    @endsection