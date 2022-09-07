<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3>
                Create 
            </h3>
        </div>    
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="exampleInputPassword1">
                              </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Descriptionp</label>
                                <input type="text" class="form-control" name="description" id="exampleInputPassword1">
                              </div>
                            <div>
                                <input type="reset" class="btn btn-md btn-warning">
                                <button type="submit" name="simpan" class="btn btn-md btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
