<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD WEBPRO</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <a href="{{ url('/walas/create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <table id="table-crud">
                <thead>
                    <tr>
                        <th>No</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</body>
</html>