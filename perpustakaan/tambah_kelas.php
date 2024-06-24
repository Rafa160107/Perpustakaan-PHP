<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">        <title></title>
    </head>
    <body>
        <h3>Tambah Kelas</h3>
        <form action="proses_tambah_kelas.php" method="post">
            Kelas:
            <input type="text" name="nama_kelas" value="" class="form-control">
            Kelompok:
            <input type="text" name="kelompok" value="" class="form-control">
            <input type="submit" name="simpan" value="tambah kelas" class="btn btn-primary">
        </form>
    </body>
</html>