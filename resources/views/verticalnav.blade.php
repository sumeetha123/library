<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Lavishly+Yours&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Lavishly+Yours&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Babylonica&family=Open+Sans:wght@300&display=swap" rel="stylesheet">


    <style>
        .fam {
            font-family: 'Lavishly Yours', cursive;
            
        }

        .back {
            background-color: black;
            box-shadow: 2ch;
            font-weight:  50px;
            padding-left: 40px;
            height: 85vh;
            width: 240px;
            
            /* shadow-lg */
        }

        .common {
            font-weight: bold;
            padding-bottom: 25px;
            text-decoration: none;
            font-size: 20px;
            font-family: cursive;
            color: rgb(252, 206, 2);

        }
        a {
            color: rgb(252, 206, 2);
        }

        a:hover {
            color: rgb(252, 206, 2);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="back">
        {{-- <div class="w-1/2 h-10 border-2 border -yellow-500 bg-yellow-500 rounded-full"> --}}
            <div class="font-bold text-black rounded-full bg-warning flex items-center justify-center font-mono fam " style="height: 110px; width: 110px; font-size: 27px; ">LM</div>
            {{-- <div class="border-yellow-500 rounded-full"> --}}
            <ul class="text-warning px-2 pt-12">
                <li class="common  border-r-2 border-warning pt-2"><a class="active" href="/dashboard">Dashboard</a></li>
                <li class="common "><a href="/books">Books</a></li>
                <li class="common"><a href="/authors">Authors</a></li>
                <li class=" common"><a href="/about">About</a></li>
                <li class=" common "><a href="/magazines">Magazines</a></li>
                <li class=" common "><a href="/newspapers">Newspapers</a></li>
                
              </ul>
            </div>              
        </div>
    </nav>
    @include('verticalnav1.nav2')
    {{-- @yield('content') --}}
    @yield('cont')
</body>
</html>