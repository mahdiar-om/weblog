<select name="category_id">
    @foreach ($categories as $category)
    <option class=" dropdown-toggle" value={{$category->id}} >{{$category->category}}</option>
    @endforeach
</select>