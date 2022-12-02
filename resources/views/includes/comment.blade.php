@extends('templates.post')
    @section('content')
    <div class="w-100">
        <h5>Add a comment</h5>
        {{-- comment --}}
        <form action="{{route('comment.store')}}" method="post">
          @csrf
          <div class="form-outline">
            <input type="hidden" name = "id" value="{{$id}}"> 
            <textarea class="form-control" name="comment" rows="4" placeholder="type your comment ..."></textarea>
          </div>
          <div class="d-flex justify-content-between mt-3">
            <button class="btn btn-success btn-lg active" type="submit " aria-pressed="true"> Send </button>
            <a href="" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">
              Delet <i class="fas fa-long-arrow-alt-right ms-1"></i>
            </a>
        </form>
      </div>
    @endsection