<li class="nav-item ">
  <a class="nav-link " href={{route('posts.login_user_post')}}>Your posts</a>
</li>


  @if(isset($categories))
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            categories
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            
              @foreach ($categories as $category)
                <li><a class="dropdown-item" href={{route('category.show' , ['id' => $category->id])}}>
                {{$category->category}} </a></li>
              @endforeach
          </ul>
        </li>
      </ul>
    </div>
  @endif
