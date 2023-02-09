<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Export Excel & CSV to Database in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Import and Export CSV & Excel to Database
        </h2>
        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import data</button>
            <a class="btn btn-success" href="{{ route('file-export') }}">Export data</a>
        </form>
        <br>
        <br>
        <div class=" card-content table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <th>Subject</th>
                    <th>Body</th>
                    <th>Characters</th>
                </thead>
                <tbody>
                    @if(!empty($data) && $data->count())
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $row->Subject }}</td>
                        <td>{{ $row->Body }}</td>
                        <td>{{ $row->Characters }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="10">There are no data.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
</body>

</html>