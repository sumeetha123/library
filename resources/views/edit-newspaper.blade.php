<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Newspapers</title>
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
            <div class="container"  style="margin-top: 70px;">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card bg-warning text-dark fw-bold pb-3 pl-3 pr-3">
                            <div class="card-header">
                            Edit Newspapers
                            </div>
                            <div class="card-body">
                            
                            </div>
                            
                            <form method="POST" action="{{route('Newspaper.update')}}">
                                @csrf
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" name="Name" class="form-control" value="{{$newspaper->Name}}" placeholder="Enter Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Newspaper_Name">Newspaper Name</label><br>
                                        <input type="text" name="Newspaper_Name" value="{{$newspaper->Newspaper_Name}}" placeholder="Enter Newspaper Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Magazines_Id">Reg Id</label><br>
                                        <input type="text" name="Reg_Id" value="{{$newspaper->Reg_Id}}" placeholder="Enter Reg Id"/>
                                    </div>


                                    <div class="form-group">
                                        <label for="Date">Date</label><br>
                                        <input type="Date" name="Date" value="{{$newspaper->Date}}" placeholder="Enter Date"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="Category">Category</label><br>
                                        <input type="text" name="Category" value="{{$newspaper->Category}}" placeholder="Enter Category"/>
                                    </div>
                                    
                                    <input type="hidden" name="S_No" value="{{$newspaper->S_No}}">
                                    <input type="submit" class="btn btn-success" value="submit" style="margin-left: 210px;"  />
                         
                            </form>
                            
                            </div>
                            
                            
                        
                        </div>
                    
                    </div>
                
                </div>
                
            </div>
        </section>
</body>
</html>
