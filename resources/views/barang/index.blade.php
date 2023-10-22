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
        <div class="row">
            <div class="col-md-7 col-md-offset-2">
                <a href="#"><input type="submit" class="btn btn-md btn-primary" name="Tambah Barang"
                        value="Tambah Barang"></a></br>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th> </th>
                            <th> Nama Barang </th>
                            <th> Harga Barang </th>
                            <th> Biaya Penyimpanan </th>
                            <th> Periode Permintaan </th>
                            <th> Satuan </th>
                            <th> Konversi </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                        @foreach ($listData as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->nama_barang }}</td>
                                <td>{{ $data->harga_barang }}</td>
                                <td>{{ $data->biaya_penyimpanan }}</td>
                                <td>{{ $data->periode_permintaan }}</td>
                                <td>{{ $data->satuan }}</td>
                                <td>{{ $data->konversi }}</td>
                                <td>
                                    <a href="#">
                                        <button type="button" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-pencil">
                                                Edit
                                            </span>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <button onclick="return confirm('Hapus data ini?')" type="button"
                                            class="btn btn-danger">
                                            <span class="glyphicon glyphicon-trash">
                                                Delete
                                            </span>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>
