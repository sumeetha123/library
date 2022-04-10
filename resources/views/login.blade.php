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

<!DOCTYPE html>
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
</head>
<body>
   
    @include('horinav')
    <div class="float1">
        @include('verticalnav')
    </div>
        @section('title')
        Login Page
        @endsection
    
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
    
</body>
</html>
