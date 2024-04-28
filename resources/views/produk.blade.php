<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">UTS Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/produk">produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">about</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1>Halaman Produk</h1>
    <div class="row"></div>
    <div class="col-sm-6">
      <table class="table table-primary table-sm table-hover">
        <thead>
          <tr>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Jenis Produk</th>
          </tr>
        </thead>
        <tbody>
          
          @for ($i=0; $i < $jumlah; $i++) 
              <tr>
                  <td>{{ $kode[$i] }}</td>
                  <td>{{ $nama[$i] }}</td>
                  <td>Alat Tulis</td>
              </tr>
          @endfor
      </tbody>
      </table>
      <div class="col-sm-6">
       <h4>Form Tambah Produk</h4>
       <form action="" method="GET">
        <label for="">Kode Produk</label>
        <input type="number" name="" id="" class="form-control">
        <label for="">Nama Produk</label>
        <input type="text" name="" id="" class="form-control">
        <label for="">Harga Produk</label>
        <input type="number" name="" id="" class="form-control">
        <label for="">Jenis Produk</label>
        <select name="" id="" class="form-control"></select>
        <option value="">Alat Tulis</option>
        <option value="">Elektronik</option>
        <option value="">Sembako</option>
        </select>
        </form> 
      </div>
      <div class="form-group mt-2">
        <button class="btn btn-primary">Simpan</button>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>