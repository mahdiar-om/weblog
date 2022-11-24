
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
@if(session()->has('message'))

    <div class="alert alert-success center" role="alert">
        {{ session()->get('message') }}
    </div>

@endif
  @extends('app.boot')
  @extends('app.navbar')
  
    <div class="container">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col">
                    <h2 class = "ms-1">{{$post -> title}}</h2>
                    <h6 class = "ms-1">{{$post -> text}}</h6>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>
