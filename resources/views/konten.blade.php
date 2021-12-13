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
<style>
    .me{
        display: flex;
        width: 100%;
        flex-direction: row-reverse;
        justify-content: start;
        text-align: start;
        flex-wrap: wrap-reverse;
        margin: 10px 10px;
        
    }
    .me2{
        display: flex;
        flex-direction: column;
        border: 3px solid red;
        margin: 10px 10px;
    }
    .me2 a img{
        width: 200px;
        height: 200px;
        object-fit: cover;
    }
</style>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <a href="{{url('create')}}" class="btn btn-primary">Tambah Gambar</a>
        <div class="me">
           @foreach ($data as $item)
            <div class="me2">
            <a href="{{$item->link}}"><img class="card-img-top" src="{{$item->image}}" style="display: block"></a>
            <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <a href="{{url('edit/'.$item->id)}}" class="btn btn-warning">Edit</a>
            <a href="{{url('destroy/'.$item->id)}}" class="btn btn-danger">Hapus</a>
            </div></div>
            @endforeach 
        </div>
    </div>
</body>
</html>


