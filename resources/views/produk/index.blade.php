<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
            <tr>
                <td>{{ $produk->nama}}</td>
                <td>{{ $produk->harga}}</td>
                <td>{{$produk->stok}}</td>
                <td>{{$produk->deskripsi}}</td>
                <td><img src="{{asset($produk->foto)}}" alt=""></td>
                <td>
                    <a href="{{route ('produk.edit',["id" => $produk->id]) }}"><button>Update</button></a>
                    <a href=""><button>Delete</button></a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <a href="{{route ('produk.create')}}"><button>Add Produk</button></a>
</body>
</html>
