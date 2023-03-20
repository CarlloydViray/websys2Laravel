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

    <title>Information</title>
</head>

<body>

    <div class="container mt-3">
        <br><br><br>
        <center>
            <h1>Information Page</h1>
        </center>
        <br><br>
        <table class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <td><b>Name</b></td>
                    <td>{{$name}}</td>
                </tr>
                <tr>
                    <td><b>Sex</b></td>
                    <td>{{$sex}}</td>
                </tr>
                <tr>
                    <td><b>Age</b></td>
                    <td>{{$age}}</td>
                </tr>
                <tr>
                    <td><b>Birthday</b></td>
                    <td>{{$bday}}</td>
                </tr>
                <tr>
                    <td><b>Civil Status</b></td>
                    <td>{{$civilStat}}</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
