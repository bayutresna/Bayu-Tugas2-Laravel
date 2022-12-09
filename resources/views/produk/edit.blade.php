<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>

<form action="{{ route('produk.update', ["id" => $produk->id]) }}" method = "post" enctype="multipart/form-data">
    @method("put")
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nama Produk</label>
      <input class="form-control" id="namaproduk" name= "nama" value="{{$produk->nama}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Deskripsi Produk</label>
      <textarea class="form-control" id="deskripsiproduk" name="deskripsi" value="{{$produk->deskripsi}}"> {{$produk->deskripsi}}</textarea>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Harga Produk</label>
      <input class="form-control" id="hargaproduk" name="harga" value="{{$produk->harga}}">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Banyak Stok</label>
      <input class="form-control" id="stok" name="stok" value="{{$produk->stok}}"> </input>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Upload Foto Produk</label>
      <input type="file" class="form-control" id="imgname" name="foto"> </input>
    </div>
    <input type="hidden" name="id" value="{{$produk->id}}">
    <button type="submit" @class(["btn", "btn-primary"])>Submit</button>
  </form>
</body>
</html>
