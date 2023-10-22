<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thesisku</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @component('components.navbar')
    @endcomponent

    <div class="container-fluid">
        <div class="col-md-7 col-md-offset-2">
            <form class="form-horizontal" method="post" action="update">
                @csrf
                <legend> Form Edit Bagian </legend>
                <input type="hidden" name="id_bagian" value="{{ $data->id_bagian }}">
                <div class="form-group">
                    <label for="nama_bagian" class="col-md-2"> Nama Bagian </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="nama_bagian" name="nama_bagian"
                            value="{{ $data->nama_bagian }}">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-7 col-md-offset-2">
                        <input type="submit" class="btn btn-md btn-primary" name="update" value="Update">
                        <a class="btn btn-danger" href='javascript:history.back(1);' role="button">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>
