<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Books</title>
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
                            Edit Book
                            </div>
                            <div class="card-body">
                            
                            </div>
                            
                            <form method="POST" action="{{route('book.update')}}">
                                @csrf
                                    <div class="form-group">
                                        <label for="Books_Name">Book Title</label>
                                        <input type="text" name="Books_Name" class="form-control" value="{{$book->Books_Name}}" placeholder="Enter book title"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Authors_Name">Authors Name</label>
                                        <input type="text" name="Authors_Name" value="{{$book->Authors_Name}}" placeholder="Enter Author title"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Year">Year</label>
                                        <input type="text" name="Year" value="{{$book->Year}}" placeholder="Enter Year"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Category">Category</label>
                                        <input type="text" name="Category" value="{{$book->Category}}" placeholder="Enter Category"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <textarea  name="Description" placeholder="Enter description" rows="3" class="form-control">{{$book->Description}}</textarea>
                                    </div>
                                    <input type="hidden" name="S_No" value="{{$book->S_No}}">
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
