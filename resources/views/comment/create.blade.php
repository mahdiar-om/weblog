@extends('templates.app')
  @auth
    @section('nav_content')
        @include('includes.navbar')
    @endsection

    @section('state')
        log out
    @endsection
  @endauth

  @section('state')
      log in
  @endsection

  @section('content')
    @include('includes.comment')
  @endsection

