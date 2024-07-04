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
            @if (@session('success'))
            <div class="alert alert-success">{{session('success')}}</div>

            @endif
            <div class="col-md-12">
                <div class="card">
                    <h1 class="bg-light text-center text-success">CRUD IN LARAVEL</h1>
                    <div class="card-header bg-dark text-white d-flex justify-content-between">
                        <h3>List of Students</h3>
                        <a href="{{route('students.create')}} " class="btn btn-primary">+Add Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Course</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->tel}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('student.show',[$student->id])}}"
                                            class=" btn btn-warning ">Show</a>

                                        <a href="{{route('student.edit',[$student->id])}}"
                                            class=" btn btn-primary ">Edit</a>

                                        <form action="{{route('student.destroy',[$student->id])}}" method="POST">
                                            {{-- [$student->id] helps to fetch the id of the datas--}}
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>