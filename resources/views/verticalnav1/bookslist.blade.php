<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <style>
        .float{
            float: right;
        }
        .float1{
            float: left;
        }
        
        .table {
            padding-left: 30px;
            border-collapse: separate;
            border-spacing: 0 15px;
            
        }

        /* th,td {
            width: 150px;
            text-align: center;
            border: 1px solid black;
            padding: 5px;
            } */

        h1 {
            font-family: cursive;
        }

        .black{
            text-color: rgb(244, 244, 244);
        }
    </style>
</head>
<body>
    @include('horinav')
    <div class="float1">
    @include('verticalnav')
    </div>
    {{-- @include('verticalnav') --}}
    
    <div class="jumbotron text-center bg-warning opacity-warning-25">
        <h1 class="text-black">Books</h1>
        <div class="float-right">
            <a href="{{ url('add-book')}}" class="btn btn-success px-4 py-2 mr-4">Add Books</a>
        </div>
    </div>


    <div class="container-fluid pl-3">

        <div class="row">
            <div class="col-2">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action bg-success text-white">Books</a>
                    <a href="authors" class="list-group-item list-group-item-action bg-warning text-dark">Authors</a>
                  </div>
            </div> 
            <div class="col-10"> 
                <table class="table" id="myTable">
                    <thead class="thead-dark" style="font-weight: 20px;">
                        <tr>
                            {{-- <td>S_No</td> --}}
                            <td>Books_Name</td>
                            <td>Authors_Name</td>
                            <td>Year</td>
                            <td>Category</td>
                            <td>Description</td>
                
                            <td>Edit</td>
                            <td>Delete</td>
                
                            
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($books as $book)
                        <tr>
                            <td>{{$book->Books_Name }}</td>
                            <td>{{$book->Authors_Name }}</td>
                            <td>{{$book->Year}}</td>
                            <td>{{$book->Category}}</td>
                            <td>{{$book->Description}}</td>
                            <td>
                                {{-- <a href="/books/{{$book->S_No}}" class="btn btn-success">View</a> --}}
                                <a href="/edit-book/{{$book->S_No}}" class="btn btn-success">Edit</a></td>
                                <td><a href="/delete-book/{{$book->S_No}}" class="btn btn-danger">Delete</a>

                            </td>
                        @endforeach
                        </tr>
                        
                    </tbody>
                </table>
                
            </div>
        </div>
       
    </div>

</body>
</html>






