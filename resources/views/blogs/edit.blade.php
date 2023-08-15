<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  @include('blogs.nav')

    <div class="container">
        <div class="text-end">
             <a href="{{ route('blogs.addblog') }}" class="btn btn-dark mt-2">Back</a>
        </div>
        <h1>crud</h1>

    </div>
    <div class="container">
        
        <form method="POST" action="{{ Route('blogs.update',$edit->id) }}" enctype="multipart/form-data">
            @csrf
                @method('PUT')
                <div class="form-group ">
              <label for="exampleFormControlInput1">Title</label>
              <input type="name"  value="{{ $edit->title }}"  class="form-control"  name='title1' id="exampleFormControlInput1" placeholder="Enter a Title">
             
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Discription</label>
              <textarea class="form-control"   name="discription" id="exampleFormControlTextarea1" rows="3" placeholder="Write a Description">{{ $edit->description }}</textarea>
             
            </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Image</label>
                  <input type="file" name="image" value="{{ $edit->image }}"  class="form-control-file" id="exampleFormControlFile1">
                  
                </div>

                <button  type="submit"   class="btn btn-dark ">Submit</button>
            
          </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>