<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table, th, td {
        / / border: 1 px solid black;
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
        }

        .alert {
            color: #45a049;
            text-align: center;
        }

    </style>
    <title>The lis of Record</title>
</head>
<body>
<div class="container mt-5 bg-white" style="width: 900px; padding: 3rem;">

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <a class="btn btn-primary float-end mb-3" style="float:right" href="/country">Create Country Info</a>
    <table class="table" style="width:100%">
        <tr>
            <th>Country Name</th>
            <th>Country Code</th>
            <th>Actions</th>

        </tr>
        @foreach($data as $dt)
            <tr>
                <td>{{$dt['name']}}</td>
                <td>{{$dt['code']}}</td>
                <td>
                    &nbsp;&nbsp; <a href="/country/{{$dt['id']}}/edit" class="btn btn-warning btn-sm">Edit</a> &nbsp;
                    <a href="/country/{{$dt['id']}}/delete" class="btn btn-danger btn-sm"> Delete</a>
                </td>


            </tr>
        @endforeach


    </table>
{{-- bellow method is used for pagination only like show 10 pages with next and previous button--}}
    {{ $data->links()}}
</div>
</body>
</html>
