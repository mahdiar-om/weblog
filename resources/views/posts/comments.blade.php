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
        <div class="container">
            @include('includes.post_comments')
        </div>
    @endsection
