@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}<br><br><hr>
    </div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
      @extends('app.boot')

</head>
<body>
    <x-login_template  :state={!!$state!!}/>
</body>
</html>
