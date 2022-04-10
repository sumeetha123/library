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
    </style>
</head>
<body>
    @include('horinav')
    <div class="float1">
    @include('verticalnav')
    </div>
    {{-- @include('verticalnav') --}}
    
    <div class="jumbotron text-center bg-warning opacity-warning-25">
        <h1 class="text-black">Magazines</h1>
        <div class="float-right">
            <a href="" class="btn btn-success px-4 py-2 mr-4"  data-toggle="modal" data-target="#myModal" >Add Magazine</a>
        </div>
    </div>


    <div class="container-fluid pl-3">

        <div class="row">
            <div class="col-2">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Magazines</a>
                    <a href="newspaper" class="list-group-item list-group-item-action">Newspapers</a>
                
                  </div>
            </div>
            <div class="col-10">
                <table class="table" id="myTable">
                    <thead class="thead-dark">
                        <tr>
                            <td>S_NO</td>
                            <td>Name</td>
                            <td>Reg_No</td>
                            <td>Magazine_Name</td>
                            <td>Date</td>
                            <td>Category</td>
                
                            <td>Edit</td>
                            <td>Delete</td>
                
                            
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach($books as $b)
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
                            </form></td>
                
                            
                        </tr>
                        @endforeach
                    </tbody> --}}
                </table>
                
            </div>
        </div>
    </div>


    <!-- The Modal -->
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
                        <label for="">Magazine_Name</label>
                        <input type="text" class='form-control' name='Year' id="Year">
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="text" class='form-control' name='Category' id="Category">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class='form-control' name='Descripton' id="Description">
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" id='submit' value="Add Book" class='form-control btn btn-success'>
                    </div>
                    
                    
                </form>
            </div>
    
           
    
        </div>
        </div>
    </div>



    <script>
        $('.showEditModal').click(function(e){

          Books_Name =  e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
          Authors_Name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
          Year = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.innerText
          Category = e.target.parentElement.previousElementSibling.previousElementSibling.innerText
          Description = e.target.parentElement.previousElementSibling.innerText
          
          $('#Books_Name').val(Books_Name);
          $('#Authors_Name').val(Authors_Name);
          $('#Year').val(Year);
          $('#Category').val(Category);
          $('#Description').val(Description);


            $('#myModal').modal('show');

        })

        </script>


        {{-- $(document).ready(function() {
            $('#myTable').DataTable();
        }); --}}





    {{-- <div class="container">
        <div class="row">

        </div>
    </div> --}}
    {{-- <div class="float">
        <button class="mt-10 mr-20 bg-yellow-500 py-2 px-4 rounded-lg border-2 border-yellow-500 text-black text-xl hover:bg-yellow-400 hover:text-black transition duration-300 text-center " id="Addbook">Add Books</button>
    
            <div id="ModalB" class="Modal">
                <div class="Modal-Content">
                    <span class="close">x</span>
                    <div class="signin-form">
                        <form class="form">
                            <h1 class="heading">Add a Book
                            </h1>
                            <hr>
                            <label class="labelText">Books Name</label>
                            <input type="text" placeholder="Enter books name" required>
                            <label class="labelText">Authors Name</label>
                            <input type="text" placeholder="Enter authors name" required>
                            <label for="year">Enter the year</label>
                            <input type="number" id="quantity" name="quantity" min="4" max="4"><br>
                            <label for="cat">Choose a category</label>

                                    <select name="cat" id="cat">
                                    <option value="Fantasy">Fantasy</option>
                                    <option value="Comedy">Comedy</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Tragedy">Tragedy</option>
                                    <option value="Science fiction">Science fiction</option>
                                    <option value="thriller">Triller</option>

                            </select>
                            <label for="desc">Description</label>

                            <textarea id="desc" name="desc" rows="4" cols="50">
                        
                            </textarea>
                            <button class="submit-butt">Add book</button>

                        </form>
                    </div>
                </div>
        </div>
    </div>

    <div class="mt-48 table">
    <table class="tab border-white">
        <thead>
            <tr>
                <th>S_NO</th>
                <th>Books_Name</th>
                <th>Authors_Name</th>
                <th>Year</th>
                <th>Category</th>
                <th>Description</th>

                <th>Edit</th>
                <th>Delete</th>

            </tr>
            {{-- <tbody>
                <tr>
                    <td>Harrypotter series</td>
                    <td>J.K.Rowling</td>
                    <td>1964</td>
                </tr>
            </tbody> --}}
        {{-- </thead>
    </table>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
    <script src="js/custom.js"></script> --}} 
    {{-- <div class="modal" tabindex="-1" role="dialog">


        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div> --}}



</body>
</html>







