@if(session()->has('message'))
    <div class="alert alert-success">
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

    <form method = "POST" action = {{route('posts.store')}}>
        @CSRF
        <input type="text" placeholder="Title" name="title">
        <input type="text" placeholder="Text" name="text">
        <button type="submit">Press here</button>
    </form>

</body>
</html>
