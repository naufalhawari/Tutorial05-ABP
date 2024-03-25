<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>

    <!-- <link rel="stylesheet" href="{{ asset('css/test.css') }}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>{{ $title }}</h1>
            <div style="text-align:right">
                <a href="/product/create" class="btn btn-success">Tambah Produk</a>
            </div>

            {{ session('message') }}
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>

                @php $i = 1 @endphp
                @foreach($data as $d)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->price }}</td>
                    <td>
                        <a class="btn btn-warning">Edit</a>
                        <a class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
            
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>