<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Babylonica&family=Beau+Rivage&family=Grape+Nuts&display=swap" rel="stylesheet">
    <style>
        .side0{
            /* margin-top: 200px;*/
            padding-right: 450px;
            padding-top: 10px; 
            /* font-family: 'Babylonica', cursive; */
            /* font-family: 'Open Sans', sans-serif; */
            /* font-family: 'Beau Rivage', cursive; */
            font-family: 'Grape Nuts', cursive;
            
        }
        .side1 {
            /* margin-top: 200px;*/
            padding-left: 110px;
            padding-top: 80px; 
            /* font-family: 'Babylonica', cursive; */
            /* font-family: 'Open Sans', sans-serif; */
            /* font-family: 'Beau Rivage', cursive; */
            font-family: 'Grape Nuts', cursive;
        }

        .float1{
            float: left;
        }

        .float{
            float: right;
        }

        .need {
            font-size: 50px; 
            color: rgb(180, 110, 6);
            
        }
    </style>
</head>
<body>
    @include('horinav')
    <div class="float1">
    @include('verticalnav') 

    @section('title')
    Dashboard Page
    @endsection



{{-- @section('cont') --}}
    <div class="float">
        <p class="need side1">Hey &nbsp; Sumi!</p>
        <p class="need side0">Welcome &nbsp to &nbsp Dashboard &nbsp;!</p>
        {{-- <p class="text-5xl side0">Dashboard</p> --}}
       
    <div>

{{-- @endsection --}}

</body>
</html>


