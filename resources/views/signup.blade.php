{{-- @extends('library')
@section('title')
    Signup Page
@endsection

@section('content')
    <h1>This is signup page</h1>
    <p>Some text</p>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .form1 {
                padding-left: 650px;
                
            }
    
            .form {
                padding-left: 180px;
            }
    
            .float{
                float: right;
            }
            .float1{
                float: left;
            }
            
        </style>
</head>
<body>
    @include('horinav')
    <div class="float1">
        @include('verticalnav')
    </div>
        @section('title')
        Sign Up Page
        @endsection
    

        <div class="float1">
    
            {{-- <div>
                {{-- <form>
                <div class="text-xl form1">
                    <h1>Name :</h1>
                    
                    </div>
                </form> --}}
                {{-- <div class="container-lg form1 mb-12">
                
                <form action = "/user/register" method = "post" class="text-xl form  w-3/4 bg-black rounded-lg ">
                    @csrf
                    <p class="text-yellow-500 pt-10 ">
                    Name:</p>
                    <input type="text" name="name" class="border-2 w-90 border-yellow-500 bg-yellow-200 text-lg px-12 rounded required "><br><br>
                    <p class="text-yellow-500">Username:</p>
                    <input type="text" name="username" class="border-2 border-yellow-500 bg-yellow-200 text-lg px-12 rounded"> <br><br>
                    <p class="text-yellow-500">Password:</p>
                    <input type="text" name="password" class="border-2 border-yellow-500 bg-yellow-200 text-lg px-12 rounded"> <br><br>
                    <input type="submit" value="Sign Up" class="px-4 py-2 bg-yellow-600 text-black ml-24 mb-12 rounded" >
                </form>
                </div> --}}
            </div>  
        
</body>
</html>
