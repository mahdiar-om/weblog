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
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" ><h2>weblog</h2></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/weblog">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Your post comments</a>
              </li>
            </ul>
            <span class="navbar-text">
                <a href="#">Log out</a>
            </span>
          </div>
        </div>
      </nav>











    @foreach ($weblogs as $weblog)
        <h2 class = "ms-1">{{$weblog -> title}}</h2>
        <h6 class = "ms-1">{{$weblog -> text}}</h6>
        <form method = "POST" action = {{route('leave_comment')}}>
            @CSRF
            <input type="text" value="{{$weblog->id}}" name = "id" hidden>
            <input class = "ms-2 mt-2" type="text" name = "comment" placeholder="laev comment">
            <button class = "bg-success text-white" type="submit">Post</button>
            
        </form>
        <form method = "POST" action = {{route('view_comments')}}>
            @CSRF
            <option value=""></option>
            <input type="text" value="{{$weblog->id}}" name = "id" hidden>
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle mt-2 ms-2" data-bs-toggle="dropdown" aria-expanded="false">
                  Comment
                </button>
                <ul class="dropdown-menu">
                     @foreach ($comments as $comment)
                        @if ($comment['post_id'] == $weblog['id'] && $comment['verification'] == true)
                            <div class="dropdown-item  mt-2 me-2">{{$comment['comment']}}</div>
                        @endif
                    @endforeach
                </ul>
              </div>
        </form>
    @endforeach

    
</body>
</html>