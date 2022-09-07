<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-md-12">
    <form action="{{ url('/update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <div class="mb-2">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $tdl->title }}">
        </div>
        <div class="mb-2">
            <label for="slug" class="form-label">Description</label>
            <input type="text" name="description" class="form-control"  value="{{ $tdl->description }}">
        </div>
        <div>
             <input type="reset" class="btn btn-md btn-warning">
             <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
        </div>
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

