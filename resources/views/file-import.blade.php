<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Export Excel & CSV to Database in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<style>
    .div-table {
        display: table;
        width: auto;
        background-color: #eee;
        border: 1px solid #666666;
        border-spacing: 5px;
        /* cellspacing:poor IE support for  this */
    }

    .div-table-row {
        display: table-row;
        width: auto;
        clear: both;
    }

    .div-table-col {
        float: left;
        /* fix for  buggy browsers */
        display: table-column;
        width: 200px;
        background-color: #ccc;
    }
</style>

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

        @if(!empty($data))
        @foreach($data as $row)
        <div style="float: left; width: 33%; border: 1px solid #000000;">
            <div>{{ $row->Subject }}</div>
        </div>
        <div style="float: left; width: 33%; border: 1px solid #000000;">
            <div>{{ $row->Body }}</div>
        </div>
        <div style="float: left; width: 33%; border: 1px solid #000000;">
            <div>{{ $row->Characters }}</div>
        </div>

        @endforeach
        @else
        <div>
            <div colspan="10">There are no data.</div>
        </div>
        @endif
    </div>

</body>

</html>