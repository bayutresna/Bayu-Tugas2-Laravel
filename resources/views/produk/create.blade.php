<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>

<form action="{{ route('produk.insert')}}" method = "post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nama Produk</label>
      <input class="form-control" id="namaproduk" name= "nama">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Deskripsi Produk</label>
      <textarea class="form-control" id="deskripsiproduk" name="deskripsi"> </textarea>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Harga Produk</label>
      <input class="form-control" id="hargaproduk" name="harga">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Banyak Stok</label>
      <input class="form-control" id="stok" name="stok"> </input>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Upload Foto Produk</label>
      <input type="file" class="form-control" id="imgname" name="foto"> </input>
    </div>
    <button type="submit" @class(["btn", "btn-primary"])>Submit</button>
  </form>
</body>
</html>
