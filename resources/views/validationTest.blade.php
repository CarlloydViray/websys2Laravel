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
            <h1>Validation Reg Page</h1>
        </center>
        <br><br>
        <form action="validationTestView" method="POST">

            @csrf

            {{-- Using validation --}}

            <div class="mb-3">
                <label for="name">First Name</label>
                <input type="text" class="form-control" id="name" name="fname" placeholder="Enter First Name"
                    value="{{ old('fname') }}">

                @error('fname')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>



            <div class="mb-3">
                <label for="name">Last Name</label>
                <input type="text" class="form-control" id="name" name="lname" placeholder="Enter Last Name"
                    value="{{ old('lname') }}">

                @error('lname')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name">Password</label>
                <input type="password" class="form-control" id="name" name="password" placeholder="Enter Password">

                @error('password')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name">Retype Password</label>
                <input type="password" class="form-control" id="name" name="password2"
                    placeholder="Retype Password">

                @error('password2')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name">Age</label>
                <input type="text" class="form-control" id="name" name="age" placeholder="Enter Age"
                    value="{{ old('age') }}">

                @error('age')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name">Birthday</label>
                <input type="text" class="form-control" id="name" name="bday" placeholder="Enter Birthday"
                    value="{{ old('bday') }}">

                @error('bday')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name">Website</label>
                <input type="text" class="form-control" id="name" name="website" placeholder="Enter Website"
                    value="{{ old('website') }}">

                @error('website')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="name" name="email" placeholder="Enter Email"
                    value="{{ old('email') }}">

                @error('email')
                    <span class="mb-3" style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Validate</button>
            </div>
        </form>
    </div>

</body>

</html>
