      @extends('templates.post')
          
      @section('content')
        <label class="text-large mt-2 mb-3" >Create your categorys</label><br>
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <input name = "category" type="text" class = "me-4" placeholder="new category">
              @include('includes.dropdownlist')
            <br><button type="submit" class="btn btn-larg bg-success mt-2 mb-3"> Add</button>
        </form>
      @endsection
