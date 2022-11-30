
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
<nav>
  @extends('templates.app')
</nav>
      @extends('templates.post')
          
      @section('posts')
        <li><a href = "{{route('posts.create')}}" class="btn btn-larg bg-success mt-2 mb-3">Add Post</a></li>
        @foreach ($posts as $post)
        <p>{{$post->user->name}}:</p>
          <div class="card mb-4">
            <div class="card-body">
              <p class="text-small ms-2">{{$post['text']}}</p>
              <h3 class="ms-4 ">{{$post['title']}}</h3>
              <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                  <p class="small mb-0 ms-2">{{$post['name']}}</p>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <li><a href = "/comment/create/{{$post->id}}" class="small text-muted mb-0">eidt</a></li>
                  <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                  <form action="{{route('posts.store')}}" method="POST">  
                    @csrf 
                    <input type="text" value="{{$post->id}}" name = "id" hidden>
                    <li><a href="posts/{{$post->id}}" class="small text-muted mb-0">Verification comment</a></li>
                  </form>

                </div>
              </div>
            </div>
          </div>

          @endforeach
      @endsection
