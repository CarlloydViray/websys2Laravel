@extends('posts.template')
@section('content')
    <div class="container w-75 mx-auto">

        <h3 class="text-center">Posts</h3>



        <table class="table table-dark table-hover table-bordered">

            <tr>

                <th>ID</th>

                <th>Title</th>

                <th>Content</th>

                <th>Date Created</th>


            </tr>
            @foreach ($posts as $val)
                <tr>

                    <td>{{ $val->id }}</td>

                    <td>{{ $val->title }}</td>

                    <td>{{ $val->content }}</td>

                    <td>{{ $val->dateCreated }}</td>



                </tr>
            @endforeach
        </table>
    </div>
@endsection
