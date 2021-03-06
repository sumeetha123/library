<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add newspaper</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

</head>
<body>
    <section>
            <div class="container" style="margin-top: 80px;">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card bg-warning text-dark fw-bold"">
                            <div class="card-header">
                            Add New Newspapers
                            </div>

                            <div class="card-body">
                                

                                {{-- <form method="POST" action="{{route('book.addsubmit')}}"> --}}
                                    <form method="POST">
                                    @csrf
                                    <div class="form-group"><br>
                                        <label for="Name">Name</label>
                                        <input type="text" name="Name" class="form-control" placeholder="Enter name"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Newspaper_Name">Newspaper_Name</label><br>
                                        <input type="text" name="Newspaper_Name" placeholder="Enter Newspapers_Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Reg_Id">Reg_Id</label><br>
                                        <input type="text" name="Reg_Id" placeholder="Enter Reg_Id"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Date">Date</label><br>
                                        <input type="Date" name="Date" placeholder="Date"/>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="Category">Category</label><br>
                                        <input type="text" name="Category" placeholder="Enter Category"/>
                                    </div>
                                    <input type="submit" class="btn btn-success" value="submit"  style="margin-left: 210px;"/>
                                </form>
                            
                            </div>
                            
                        
                        
                        </div>
                    
                    </div>
                
                </div>
            
            </div>
        </section>
</body>
</html>