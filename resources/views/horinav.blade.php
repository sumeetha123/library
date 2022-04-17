<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Babylonica&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Babylonica&family=Beau+Rivage&family=Grape+Nuts&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

    
     <style>
        /* {{-- html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        } --}} */

        .float {
            float: right;
        }

        .family {
            font-family: 'Grape Nuts', cursive;

        }

        .text{
            font-size: 19px;
        }
    </style> 
</head>
<body>
    <nav class="bg-black shadow-xl shadow-orange-500">
        <div class="max-w-7xl mx-auto px-10 py-2">
            <div class="flex justify-between">
                <div class="flex space-x-5">
                    <!-- Website logo -->
                </div>
                <a class="flex py-4 pl-6 pr-4 float" href="#">
                <i class="fa-solid fa-chart-simple-horizontal h-8 w-8 mr-2" alt="logo"></i>
                    <span class="family text-yellow-500 text-3xl">
                Library Management System</a></span>
            
          <!-- Primary Navbar items -->
           
            <div class="hidden md:flex items-center space-x-3">
                <ul class="hidden md:flex items-center space-x-1">
                    <li class="active py-2 px-2 text-yellow-500 border-b-2 border-yellow-500 font-semibold "><a href="/firstview">Home</a></li>
                    {{-- <li><a href="/ourproducts">Products</a></li> --}}
                </ul>
                {{-- <div class="py-2 px-2 font-medium text-yellow-500 rounded hover:bg-yellow-600 hover:text-white transition duration-300"><a href="/signup">Sign Up</a></div>
                <div class="py-2 px-2 font-medium text-yellow-500 rounded hover:bg-yellow-600 hover:text-white transition duration-300"><a href="/login">Log In</a></div> --}}
                <div class=" text py-2 px-2 font-medium text-yellow-500 mb-1 m-4 rounded hover:bg-yellow-600 hover:text-white transition duration-300"><a href="login">Log out</a></div>
            </div>
        </div>
          
        </div>
    </nav>
      
      @yield('content')
</body>
</html>