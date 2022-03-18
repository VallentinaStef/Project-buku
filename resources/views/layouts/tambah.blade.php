<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Perpustakaan</title>
  </head>

  <body>
  
    <h1 class="text-center mb-4">Tambah Daftar Buku</h1>

  <div class="container">
        <div class="row  justify-content-center">
            <div class="col-8">
            <div class="card">
                <div class="card-body">

                <form action="/insert" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input name="JudulBuku" type="text" class="form-control">
                </div>

                <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input name="Penulis" type="text" class="form-control">
                </div>


                <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input name="penerbit" type="text" class="form-control">
                </div>


                <div class="mb-3">
                <label class="form-label">Taun Terbit</label>
                <input name="TaunTerbit" type="date" class="form-control">
                </div>


                <div class="mb-3">
                  Sinopsis
                  <textarea name="Sinopsis" class="form-control"></textarea>
                </div>


                <div class="mb-3">
                  <label class="form-label">Jumlah Halaman</label>
                  <input name="JumlahHalaman" type="text" class="form-control">
                  </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </div>
         </div>
        </div>
     </div> 
  </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>