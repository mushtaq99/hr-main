<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Country Information</title>
</head>
<body>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3>Fill the form field carefully</h3>

<div>
    <form action="/country" method="post">
        @csrf
        <label for="name">Country Name</label>
        <input type="text" id="name" name="name"  placeholder="enter name.." value="{{old('name')}}" >
        @error('name')
        <p class="text-danger text-sm" style="color: red">{{$message}}</p>
        @enderror

        <label for="code">Country Code</label>
        <input type="text" id="code" name="code"  placeholder="enter code.." value="{{old('code')}}" >
        @error('code')
        <p class="text-danger text-sm" style="color: red" >{{$message}}</p>
        @enderror
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
