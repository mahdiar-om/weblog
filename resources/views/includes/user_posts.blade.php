
      @extends('templates.post')
          
      @section('content')
        <a href = "" class="btn btn-larg bg-success mt-2 mb-3">your Post</a><br>
        @foreach ($posts as $post)
          <div class="card mb-4">
            <div class="card-body">
              <p class="text-small ms-2">{{$post['text']}}</p>
              <h3 class="ms-4 ">{{$post['title']}}</h3>
              <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                  <p class="small mb-0 ms-2">{{$post['name']}}</p>
                </div>
                <div class="d-flex flex-row align-items-center">
                  <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                    <li><a href= {{route('posts.user_posts' , ['id' => $post->id])}}  class="small text-muted mb-0">View all comment</a></li>
                </div>
              </div>
            </div>
          </div>

          @endforeach
      @endsection
