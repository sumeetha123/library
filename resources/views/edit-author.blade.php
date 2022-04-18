<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Authors</title>
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
            <div class="container" style="margin-top: 70px;">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card bg-warning text-dark fw-bold pb-3 pl-3 pr-3">
                            <div class="card-header">
                            Edit Authors 
                            </div>
                            <div class="card-body">
                            
                            </div>
                            
                            <form method="POST" action="{{route('Author.update')}}">
                                @csrf
                                    <div class="form-group">
                                        <label for="Books_Name">Book Title</label>
                                        <input type="text" name="Books_Name" class="form-control" value="{{$author->Books_Name}}" placeholder="Enter book title"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Authors_Name">Authors Name</label><br>
                                        <input type="text" name="Authors_Name" value="{{$author->Authors_Name}}" placeholder="Enter Author title"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Year">Year</label><br>
                                        <input type="text" name="Year" value="{{$author->Year}}" placeholder="Enter Year"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Category">Category</label><br>
                                        <input type="text" name="Category" value="{{$author->Category}}" placeholder="Enter Category"/>
                                    </div>
                                    <div class="form-group"><br>
                                        <label for="Description">Description</label>
                                        <textarea  name="Description" placeholder="Enter description" rows="3" class="form-control">{{$author->Description}}</textarea>
                                    </div>
                                    <input type="hidden" name="S_No" value="{{$author->S_No}}">
                                    <input type="submit" class="btn btn-success" value="submit" style="margin-left: 210px;" />
                         
                            </form>
                            
                            </div>
                            
                            
                        
                        </div>
                    
                    </div>
                
                </div>
                
            </div>
        </section>
</body>
</html>
