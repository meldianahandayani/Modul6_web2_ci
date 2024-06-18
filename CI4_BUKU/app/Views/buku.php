<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class = "container">
        <h1>Daftar Buku</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_buku as $buku): ?>
                  <tr>
                    <td><?= $buku->judul ?></td>
                    <td><?= $buku->penulis ?></td>
                    <td><?= $buku->penerbit ?></td>
                    <td><?= $buku->tahun_terbit ?></td>
                    <td><a href="<?= base_url('edit_data_buku') . '/' .$buku->id ?> "class="btn btn-primary"> Edit</a> 
                    <a href="<?= base_url('delete_data_buku'). '/' .$buku->id ?> "class="btn btn-primary"> Delete</a></td>
                  </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('add_data_buku')?> "class="btn btn-primary"> +Tambah Data Buku</a>
        <a href="<?= base_url('logout')?> "class="btn btn-primary"> Logout</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>