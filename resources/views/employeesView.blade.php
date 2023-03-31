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

    <title>Validation View</title>
</head>

<body>

    <div class="container mt-3">
        <br><br><br>
        <center>
            <h1>Validation View Page</h1>
        </center>
        <br><br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Position</b></td>
                    <td><b>created_at</b></td>
                    <td><b>updated_at</b></td>
                </tr>
            </thead>
            <tbody>
                @forelse($employee as $employeeView)
                <tr>
                    <td>{{$employeeView->id}}</td>
                    <td>{{$employeeView->name}}</td>
                    <td>{{$employeeView->position}}</td>
                    <td>{{$employeeView->created_at}}</td>
                    <td>{{$employeeView->updated_at}}</td>
                    
                </tr>
                @empty
                <tr>There is no data available</tr>
                @endforelse
                
            </tbody>
        </table>
    </div>

</body>

</html>
