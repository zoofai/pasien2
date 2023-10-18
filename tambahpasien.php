<html>
    <head>
        <tittle>My App | Halaman Utama</tittle>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <div class="col-4">
                    <h3>Tambah Data Pasien</h3>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <label for="idPasien">ID Pasien</label>
                            <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien">
                        </div>
                        <div class="form-group">
                            <label for="nmPasien">Nama Pasien</label>
                            <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Perempuan">Perempuan
                            </div>
                            <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="jk" value="Laki-">Laki-laki
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat" class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-comtrol btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>