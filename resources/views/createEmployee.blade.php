<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <title>Valdiation</title>
</head>

<body>
    <div class="container mt-3">
        <br><br><br>
        <center>
            <h1>Create Employee</h1>
        </center>
        <br><br>
        <form action="/createUser" method="POST">

            @csrf

            {{-- Using validation --}}

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                    value="{{ old('name') }}">

                @error('name')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name">Position</label>
                <input type="text" class="form-control" id="name" name="position" placeholder="Enter Position"
                    value="{{ old('position') }}">

                @error('position')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

</body>

</html>
