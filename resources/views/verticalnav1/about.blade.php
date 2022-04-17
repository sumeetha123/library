<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            padding-left: 150px;
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
    </STYLE>
</head>
<body>
    
    @include('horinav')
    <div class="float1">
        @include('verticalnav')
        @section('title')
        About Page
        @endsection
    
    {{-- @section('content') --}}
    
        <div class="float">
            <p class="need side1">Hey &nbsp; </p>
            <p class="need side0">This  &nbsp is &nbsp About &nbsp  Page</p>
            {{-- <p class="text-5xl side0">Dashboard</p> --}}
            <div class="card" style="width: 35rem; margin-top: 10px;">
                <div class="card-body bg-warning bg-opacity-3">
                  <h5 class="card-title pt-2 pb-2">Library-Management-System</h5>
                  <h6 class="card-subtitle mb-2 text-muted ">Your Online Library</h6>
                  <p class="card-text pt-2">A library management system is a piece of software that keeps track of the library’s records. Library Management Systems (LMS) is software that assists in the maintenance of a database that is used to enter new books and track papers and magazines borrowed by members, as well as their dates.</p>
                  {{-- <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a> --}}
                </div>
              </div>
        <div>
           
{{-- @endsection --}}
</body>
</html>
