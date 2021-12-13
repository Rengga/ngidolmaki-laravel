<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ngidolmaki dashboard</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Dashboard</h1>
                <form action="{{url('store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="name">Nama :</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        @error('name')
                            <i class='text-danger'>{{$message}}</i>
                        @enderror
                        
                    </div>
                    <div class="form-group mt-3">
                        <label for="gambar">Gambar :</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <i class='text-danger'>{{$message}}</i>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="link">Link :</label>
                        <input type="text" name="link" class="form-control" value="{{old('link')}}">
                        @error('link')
                            <i class='text-danger'>{{$message}}</i>
                        @enderror
                        
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>