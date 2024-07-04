<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="bg-light text-center text-success">CRUD IN LARAVEL</h1>
                    <div class="card-header bg-dark text-white d-flex justify-content-between">
                        <a href=" {{route('students.index')}}" class="btn btn-primary">BACK</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('students.store')}}" method="POST">
                            <div class="form-group m-3 p-1">
                                <label for="" class="h3">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group m-3 p-1">
                                <label for="" class="h3">Email</label>
                                <input class="form-control" type="text" placeholder="Enter Your Email" name="email">
                            </div>
                            <div class="form-group m-3 p-1">
                                <label for="" class="h3">Address</label>
                                <input class="form-control" type="text" placeholder="Enter Your Address" name="address">
                            </div>
                            <div class="form-group m-3 p-1">
                                <label for="" class="h3">Phone Number</label>
                                <input class="form-control" type="tel" placeholder="Enter Your Phone Number" name="tel">
                            </div>
                            <div class="form-group m-3 p-1">
                                <label for="" class="h3">Course</label>
                                <input class="form-control" type="text" placeholder="Enter Your Course" name="course">
                            </div>
                            <div class="form-group m-4">
                                <div class="btn btn-primary">+ADD</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>