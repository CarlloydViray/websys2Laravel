{{-- called all contents inside template.blade.php --}}

@extends('posts.template')
@section('content')
    <div class="container w-50 mx-auto">
        <h3>Edit post</h3>
        @foreach ($posts as $post)
            <form action="{{ $post->id }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">Title:</label>

                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">

                </div>

                <div class="mb-3">

                    <label class="form-label">Content:</label>


                    <textarea class="form-control" rows="3" name="content">{{ $post->content }}</textarea>


                </div>

                <input type="hidden" name="dateCreated" value="{{ $post->dateCreated }}">


                <div>
                    <button type="submit" class="btn btn-light">Update</button>

                </div>

            </form>
        @endforeach
    </div>
@endsection
