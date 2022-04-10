<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .float1{
            float: left;
        }

        .float{
            float: right;
        }
    </style>
</head>
<body>
    @include('horinav')
    <div class="float1">
        @include('verticalnav')
        @section('title')
        authors Page
        @endsection
    
    {{-- @section('content') --}}
    <div class="float">
        <h1>Hi jgdxmyj,cchj</h1>
    </div>
    {{-- @endsection --}}
</body>
</html>
