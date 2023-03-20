<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    <br><br><br>
    <div class="container mt-3">
        <br><br><br>
        <center>
            <h1>Welcome {{ $cusName }}!</h1>
        </center>
        <br><br>
        <div class="form-group">
            <label for="cusID">Customer ID</label>
            <input type="text" class="form-control" id="itemNo" aria-describedby="emailHelp"
                value={{ $cusID }} readonly>
            <br>
        </div>
        <div class="form-group">
            <label for="cusAddress">Customer Address</label>
            <input type="text" class="form-control" id="itemNo" aria-describedby="emailHelp"
                value={{ $cusAddress }} readonly>
            <br>
        </div>

    </div>
</body>

</html>
