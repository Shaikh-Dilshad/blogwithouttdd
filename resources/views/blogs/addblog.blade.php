<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('blogs.nav')

       
       <div class="container">
        @if ($message = Session('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
       <div class="d-flex justify-content-between ">
        <div class="h4">Blogs</div>
        <div>
            <a href="{{ route('blogs.create') }}" class="btn btn-primary">create</a>
        </div>
    </div>
       </div>
      
    <div class="card border-0 shadow-lg">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>image</th>
                    <th>title</th>
                    <th>description</th>
                    <th>Action</th>


                </tr>
               @foreach ($product as $details )
                   
               <tr>
                   <td>{{ $loop->index+1 }}</td>
                   <td>
                    <img src="blogsimg/{{ $details->image }}" alt="" style="width: 50px">
                </td>
                   <td>{{ $details->title }}</td>
                   <td>{{ $details->description }}</td>
                   <td>
                       <a href="{{ route('blogs.edit' , $details->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                       <a href="{{ route('blogs.destroy' , $details->id ) }}" class="btn btn-danger btn-sm">Delete</a>
                       
                    </td>
                    
                </td>
                
            </tr>
            @endforeach
            </table>
        </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>