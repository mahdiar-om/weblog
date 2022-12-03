
      @extends('templates.post')
          
      @section('content')
        <li><a href = "{{route('posts.create')}}" class="btn btn-larg bg-success mt-2 mb-3">Add Post</a></li>
        @foreach ($comments as $comment)
        <p>{{$comment->user->name}}:</p>
          <div class="card mb-4">
            <div class="card-body">
              <p class="text-small ms-2">{{$comment['comment']}}</p>
              {{-- <h3 class="ms-4 ">{{$comment['title']}}</h3> --}}
              <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                  {{-- <p class="small mb-0 ms-2">{{$post['name']}}</p> --}}
                </div>
                <div class="d-flex flex-row align-items-center">

                </div>
              </div>
            </div>
          </div>

          @endforeach
      @endsection
