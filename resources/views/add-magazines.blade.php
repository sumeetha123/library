<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add magazines</title>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                            Add New Magazine
                            </div>

                            <div class="card-body">
                                

                                {{-- <form method="POST" action="{{route('book.addsubmit')}}"> --}}
                                    <form method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" name="Name" class="form-control" placeholder="Enter name title"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Magazines_Name">Magazines_Name</label>
                                        <input type="text" name="Magazines_Name" placeholder="Enter Magazines_Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Magazines_Id">Magazines_Id</label>
                                        <input type="text" name="Magazines_Id" placeholder="Enter Magazines_Id"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Date">Date</label>
                                        <input type="Date" name="Date" placeholder="Date"/>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="Category">Category</label>
                                        <input type="text" name="Category" placeholder="Enter Category"/>
                                    </div>
                                    <input type="submit" class="btn btn-success" value="submit" />
                                </form>
                            
                            </div>
                            
                        
                        
                        </div>
                    
                    </div>
                
                </div>
            
            </div>
        </section>
</body>
</html>