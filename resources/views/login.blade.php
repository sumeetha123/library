{{-- @extends('layout')
@section('title')
    login Page
@endsection

@section('content')
    <h1>This is login page</h1>
    {{-- @foreach ($services as $service)
        <li>{{$service}}</li>
    @endforeach --}}
    {{-- <p>Some text</p> --}}
{{-- @endsection --}} 

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
    <style>
        .form1 {
            padding-left: 650px;
            
        }

        .form {
            padding-left: 180px;
        }

        .fam{
            font-family: 'Lavishly Yours', cursive;
        }
    </style>
</head> --}}
{{-- <body>
   
    @include('horinav')
    <div class="float1">
        @include('verticalnav')
    </div>
        @section('title')
        Login Page
        @endsection
     --}}
{{-- <div class="content">
    <div class="m-b-md title">
        <h1>This is the content page</h1>
        
    </div>
<div> --}}
    {{-- <div class="container-lg form1 mb-12">
    
        <form action = "/user/register" method = "post" class="text-xl form  w-3/4 bg-black rounded-lg ">
            @csrf
            {{-- <p class="text-yellow-500 pt-10 ">
            Name:</p>
            <input type="text" name="name" class="border-2 w-90 border-yellow-500 bg-yellow-200 text-lg px-12 rounded required "><br><br> --}}
            {{-- <p class="text-yellow-500 pt-12">Username:</p>
            <input type="text" name="username" class="border-2 border-yellow-500 bg-yellow-200 text-lg px-12 rounded"> <br><br>
            <p class="text-yellow-500">Password:</p>
            <input type="text" name="password" class="border-2 border-yellow-500 bg-yellow-200 text-lg px-12 rounded"> <br><br>
            <input type="submit" value="Sign In" class="px-4 py-2 bg-yellow-600 text-black ml-24 mb-12 rounded" >
        </form>
        </div> --}}
    
{{-- </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In page</title>
    {{-- {{-- <link rel="stylesheet" href="./font-awesome/css/all.min.css"> --}}
    {{-- <link rel="stylesheet" href="./css/bootstrap.min.css"> --}} 
    {{-- <link rel="stylesheet" href="./css/styles.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./font-awesome/js/all.min.js"></script>
    {{-- <script src="./js/jquery-3.6.0.min.js"></script> --}}
    {{-- <script src="./js/popper.min.js"></script> --}}
    {{-- <script src="./js/bootstrap.min.js"></script> --}}
    <script src="./js/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Lavishly+Yours&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .cont {
            top: 20%;
            /* left: 50%; */
            position: absolute;
            width: 40%;
            margin-left: 480px;
            background-color: white;
        }

        .block {
            margin-left: 220px;
        }

        .butt {
            margin-left: 1300px;
        }

        .head{
            margin-left: 500px;
            font-family: 'Grape Nuts', cursive;
            font-size: 35px;
            color: #000000;
            font-weight: bold;
        }

        .back {

            text-decoration: none;
            
        }
    </style>
</head>
<body class="bg-yellow-600">
        <button type="button" class="btn btn-light  mt-5 px-4 py-2 text-bold butt back"><a href="firstview">Back to home</a></button>
        
        <i class="fa-solid fa-user-music"></i>
        <h3 class="head">Log In &nbsp; to &nbsp; Library Management Sytem</h3>
    <div class="container-sm cont rounded-lg px-5 py-5 ">
        <form action = "/dashboard" method = "POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <span style="color: red;">@error('name'){{$message}}@enderror</span><br>
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              <span style="color: red;">@error('email'){{$message}}@enderror</span><br>

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
              <span style="color: red;">@error('password'){{$message}}@enderror</span><br>

            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary"><a href="/dashboard">Submit</a></button>
          </form>
    </div>
</body>
</html>

