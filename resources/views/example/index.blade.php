<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <table border="1" cellspacing=0 cellpadding=10>
        <thead>
            <a href="{{ route('grade.store') }}" class="btn btn-primary">Create</a>
                &nbsp;
               <tr>
                   <th>No</th>
                   <th>Title</th>
                   <th>Description</th>
                   <th>Create Date</th>
                   <th>updated_at</th>
                   <th>Action</th>
    
               </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($todolist as $tdl)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $tdl->title }}</td>
                <td>{{ $tdl->description }}</td>
                <td>{{ $tdl->created_at }}</td>
                <td>{{ $tdl->updated_at }}</td>
                <td>
                    <a href="{{ url('/edit/'.$tdl->id) }}" class="btn btn-success">Edit</a> 
    
                    <form onsubmit="return confirm('Hapus ?')" action="{{ url('delete/'.$tdl->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td> 
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

