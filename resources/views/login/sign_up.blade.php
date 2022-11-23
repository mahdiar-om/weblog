<form  method="POST" action="{{route('sign-up')}}">
    @csrf
    <input type="text" name = "name" placeholder="Enter your name"><br>
    <input type="text" name="email" placeholder="Enter your eamil"><br>
    <input type="password" name="password" placeholder="Enter your password"><br>
    <button type="submit">Click here for submit</button>
</form>
<li><a href="{{route('login-page')}}">click here to login</a></li>
