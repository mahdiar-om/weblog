<select name="category_id">
    @foreach ($categories as $category)
        <option class=" dropdown-toggle me-4 bt-btn" value={{$category->id}} >{{$category->category}}</option>
    @endforeach
</select>