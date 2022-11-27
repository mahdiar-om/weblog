@extends('templates.app')

@section('content')
  @each('components.post', $posts, 'post')
@endsection