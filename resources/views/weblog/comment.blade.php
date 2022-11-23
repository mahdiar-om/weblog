@if(session()->has('message'))

    <div class="alert alert-success center" role="alert">
        {{ session()->get('message') }}
    </div>
        
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     




    @foreach ($comments as $comment)
        <h2>{{$comment -> comment}}</h2><br>
        <h5>{{$comment -> text}}</h5><br>
        <form method = "POST" action = {{route('leave_comment')}}>
            @CSRF
            <input type="text" value="{{$comment->id}}" name = "id" hidden>
            <input type="text" name = "comment" placeholder="laev comment">
            <button type="submit">Post</button><br>
        </form>
        <form method = "POST" action = {{route('view_comments')}}>
            @CSRF
            <input type="text" value="{{$comment->id}}" name = "id" hidden>
            <button type="submit" class="bg-danger text-info">view all comments</button><br>
        </form>
    @endforeach
</body>
</html>