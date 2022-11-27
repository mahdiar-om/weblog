<h2 class = "ms-1">{{$post->title}}</h2>
<h6 class = "ms-1">{{$post->text}}</h6>
@foreach($post->comments as $comment)
    <p>{{$comment->user->name}}:</p>
    <p>{{$comment->comment}}</p>
@endforeach
