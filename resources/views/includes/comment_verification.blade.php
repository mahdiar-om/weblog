
      @extends('templates.post')
          
      @section('content')
        <a href = "" class="btn btn-larg bg-success mt-2 mb-3">your Post comments</a><br>
        @foreach ($comments as $comment)
          <div class="card mb-4">
            <div class="card-body">
              <p class="text-small ms-2">{{$comment['name']}}</p>
              <h3 class="ms-4 ">{{$comment['comment']}}</h3>
              <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <input type="checkbox"  {{$comment->verification ? "checked": ""}} disabled>
                    <form action={{route('comment.verification' , ['id' => $id])}} method="post">
                        @csrf
                        <input type="text" value="{{$comment->id}}" name = "id" hidden>
                        <input type="bool" value="{{$comment->verification}}" name = "verification" hidden>
                        <button type="submit">{{$comment->verification ? "remove" : "show"}}</button>
                    </form>
                  {{-- <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                    <li><a href =''  class="small text-muted mb-0">Verification comment</a></li> --}}
                </div>
              </div>
            </div>
          </div>

          @endforeach
      @endsection
