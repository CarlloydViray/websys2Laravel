@extends('posts.template')
@section('content')
    <div class="container w-75 mx-auto">
        <h3 class="text-center">
            Login
        </h3>
        <form action="/login/checklogin" method="post">
        </form>
    </div>
@endsection
