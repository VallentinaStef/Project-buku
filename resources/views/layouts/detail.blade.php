<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Buku</title>
  </head>
  <body>
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Buku</title>
  </head>
  <body>

    <div class="row justify-content-center">
    <div class="col-6">
  <div class="card text-center">

  <div class="card-body">
    <h2 class="card-title">{{ $data->JudulBuku }}</h2>
    <p class="card-text">Penulis : {{ $data->Penulis }}</p>
    <h5 class=text-center>Sinopsis</h5>
    <p class="card-text">{{ $data->Sinopsis }}</p>
    <p class="card-text">Tahun terbit : {{ $data->TaunTerbit }}</p>
    <p class="card-text">Penerbit : {{ $data->penerbit }}</p>
    <p class="card-text">ISBN : {{ $data->ISBN }}</p>
    <p class="card-text">Jumlah Halaman : {{ $data->JumlahHalaman }}</p>
    <a href="/buku" class="btn btn-outline-warning">Kembali</a>
  </div>
</div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>