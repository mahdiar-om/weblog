      @extends('templates.post')
          
      @section('content')
        <label class="btn btn-larg bg-success mt-2 mb-3">Create your categorys</label><br>
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <input name = "category" type="text" class = "me-4" placeholder="new category">
            <select name="category_parent">
                @foreach ($categories as $category)
                <option class=" dropdown-toggle" >{{$category->category}}</option>
                @endforeach
            </select>
            <button type="submit"> Add</button>
        </form>
      @endsection
