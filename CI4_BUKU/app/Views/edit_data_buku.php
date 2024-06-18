<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class = "container">
        <h1>Edit Daftar Buku</h1>
        <form action="<?= base_url('proses_edit_buku')?>" method="POST">
        <input type="hidden" class="form-control" id="id_buku" name="id_buku" value="<?= $data_buku ->id ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $data_buku ->judul ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis"value="<?= $data_buku ->penulis ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit"value="<?= $data_buku ->penerbit ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit"value="<?= $data_buku ->tahun_terbit ?>">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> Simpan</button>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>