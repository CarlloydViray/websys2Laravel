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

    <title>Registration</title>
</head>

<body>
    <div class="container mt-3">
        <br><br><br>
        <center>
            <h1>Registration Page</h1>
        </center>
        <br><br>
        <form action="information" method="POST">

            {{-- csrf --}}
            @csrf

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
            </div>
            <div class="mb-3">
                <label for="sex">Sex</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="sex" value="Male" checked>Male
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="sex" value="Female">Female
                </div>
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="number" class="form-control" name="age" placeholder="Enter Age" required>
            </div>
            <div class="mb-3">
                <label>Birthday</label>
                <input type="date" class="form-control" name="bday" required>
            </div>
            <div class="mb-3">
                <label>Civil Status</label>
                <select name="civilStat" id="" class="form-select" required>
                    <option value="">Select Civil Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Separated">Separated</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Taken">Taken :3</option>
                </select>
            </div>
            <br>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

</body>

</html>
