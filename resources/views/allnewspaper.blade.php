<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newspapers</title>
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
    </style>
</head>
<body>
    @include('horinav')
    <div class="float1">
    @include('verticalnav')
    </div>
    {{-- @include('verticalnav') --}}
    
    <div class="jumbotron text-center bg-warning opacity-warning-25">
        <h1 class="text-black">Newspapers</h1>
        <div class="float-right">
            <a href="{{url('add-newspapers')}}" class="btn btn-success px-4 py-2 mr-4">Add Newspaper</a>
        </div>
    </div>


    <div class="container-fluid pl-3">

        <div class="row">
            <div class="col-2">
                <div class="list-group">
                    <a href="/magazines" class="list-group-item list-group-item-action bg-success">Magazines</a>
                    <a href="#" class="list-group-item list-group-item-action bg-warning">Newspapers</a>
                
                  </div>
            </div>
            <div class="col-10">
                <table class="table" id="myTable">
                    <thead class="thead-dark">
                        <tr>
                            {{-- <td>S_No</td> --}}
                            <td>Name</td>
                            <td>Newspaper_Name</td>
                            <td>Reg_Id</td>
                            <td>Category</td>
                            <td>Date</td>

                            
                            <td>Edit</td>
                            <td>Delete</td>
                
                            
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($books as $b)
                        <tr>
                            <td>{{$b->S_NO}}</td>
                            <td>{{$b->Books_Name}}</td>
                            <td>{{$b->Authors_Name}}</td>
                            <td>{{$b->Year}}</td>
                            <td>{{$b->Category}}</td>
                            <td>{{$b->Description}}</td>
                
                            <td><a href="javascript:void(0)" class='btn btn-warning showEditModal'>Edit</a></td>
                            
                            <td><form action="books/{{$b->S_NO}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form></td> --}}
                
{{--                             
                        </tr>
                        @endforeach
                    </tbody> --}}
                    @foreach($newspapers as $newspaper)
                       <tr>
                           <td>{{$newspaper->Name }}</td>
                           <td>{{$newspaper->Newspaper_Name}}</td>
                           <td>{{$newspaper->Reg_Id }}</td>
                           <td>{{$newspaper->Category}}</td>
                           <td>{{$newspaper->Date}}</td>

                           <td>
                               {{-- <a href="/books/{{$book->S_No}}" class="btn btn-success">View</a> --}}
                               <a href="/edit-newspaper/{{$newspaper->S_No}}" class="btn btn-success">Edit</a></td>
                               <td><a href="/delete-newspaper/{{$newspaper->S_No}}" class="btn btn-danger">Delete</a>

                           </td>
                       @endforeach
                       </tr>
                       
                </table>
                
            </div>
        </div>
    </div>


    {{-- <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">
    
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <!-- Modal body -->
            <div class="modal-body">
                <form action="books" method="GET" id="form">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class='form-control' name='Books_Name' id="Books_Name">
                    </div>
                    <div class="form-group">
                        <label for="">Reg_No</label>
                        <input type="text" class='form-control' name='Authors_Name' id="Authors_Name">
                    </div>
                    <div class="form-group">
                        <label for="">Paper_No</label>
                        <input type="text" class='form-control' name='Year' id="Year">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class='form-control' name='Category' id="Category">
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="text" class='form-control' name='Descripton' id="Description">
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" id='submit' value="Done!" class='form-control btn btn-success'>
                    </div>
                    
                    
                </form>
            </div>
    
           
    
        </div>
        </div>
    </div>



   
        --}}



</body>
</html>






