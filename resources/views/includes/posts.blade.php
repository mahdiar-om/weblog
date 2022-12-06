
      @extends('templates.post')

      @section('content')
        <a href = "{{route('posts.create')}}" class="btn btn-larg bg-success mt-2 mb-3">Add Post</a>
        <a href = {{route('category.create')}} class="btn btn-larg bg-success ms-5 mt-2 mb-3">Add category</a><br>
        @foreach ($posts as $post)
        <li><a href='#' class="link-dark" style= "text-decoration: none">{{$post->user->name}}</a></li>
          <div class="card mb-4">
            <div class="card-body">
              <p class="text-small ms-2">Title : {{$post['title']}}</p>
              <h3 class="ms-4 ">{{$post['text']}}</h3>
                category: {{$post->category->category}}
              <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                  <p class="small mb-0 ms-2">{{$post['name']}}</p>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <li><a href = {{route('comment.create' , ['id' => $post->id])}} class="small text-muted mb-0">Comment</a></li>
                  <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                    <li><a href= {{route('posts.comments' , ['id' => $post->id])}}  class="small text-muted mb-0">View all comment</a></li>
                </div>
              </div>
            </div>
          </div>

          @endforeach
      @endsection
