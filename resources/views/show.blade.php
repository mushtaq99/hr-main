<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, th, td {
           // border:1px solid black;
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
<div class="container mt-5 bg-white" style="width: 900px; padding: 3rem;" >

    @if(session('message'))
        <div class="alert alert-success" >{{ session('message') }}</div>
    @endif

        <a class="btn btn-primary float-end mb-3" style="float:right"   href="/country">Create Country Info</a>
<table class="table" style="width:100%">
    <tr>
        <th>Country Name</th>
        <th>Country Code</th>

    </tr>
    @foreach($data as $dt)
        <tr>
            <td>{{$dt['name']}}</td>
            <td>{{$dt['code']}}</td>
        </tr>
        @endforeach



</table>
</div>
</body>
</html>
