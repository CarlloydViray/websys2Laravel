@extends('posts.template')

@section('content')
    {{-- alter notif --}}

    @if (Session::has('success'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">

            <strong>Success.!</strong> {{ Session::get('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif
    <div class="container w-75 mx-auto">

        <h3 class="text-center">Posts</h3>

        <div class="d-grid">

            <button class="btn btn-light w-25 mb-5" type="button" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">Add
                Post</button>

        </div>

        <table class="table table-dark table-hover table-bordered">

            <tr>

                <th>#</th>

                <th>Title</th>

                <th>Content</th>

                <th>Date Created</th>

                <th>Action</th>

            </tr>
            <?php
            
            $count = 1;
            ?>
            @foreach ($post as $val)
                <tr>

                    <td><?php echo $count; ?></td>

                    <td>{{ $val->title }}</td>

                    <td>{{ $val->content }}</td>

                    <td>{{ $val->dateCreated }}</td>
                    <td>
                        <form action="{{ route('posts.destroy', $val->id) }}" method="post">
                            <a class="btn btn-light" href="/view/{{ $val->id }}">View</a>
                            <a class="btn btn-light" href="/edit/{{ $val->id }}">Edit</a>
                            <a class="btn btn-light" href="/delete/{{ $val->id }}">Delete</a>
                        </form>
                    </td>


                </tr>
                <?php $count++; ?>
            @endforeach

        </table>




        {{-- add modal --}}
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content bg-dark">

                    <div class="modal-header">

                        <h5 class="modal-title" id="staticBackdropLabel">ADD POST</h5>

                    </div>

                    <div class="modal-body">
                        {{-- posts pertains in web.php where it was placed in resource --}}
                        <form action="{{ route('posts.store') }}" method="POST">

                            @csrf

                            <div class="mb-3">

                                <label class="form-label">Title:</label>

                                <input type="text" class="form-control" name="title">

                            </div>

                            <div class="mb-3">

                                <label class="form-label">Content:</label>


                                <textarea class="form-control" rows="3" name="content"></textarea>


                            </div>




                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-light">Create</button>

                    </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
