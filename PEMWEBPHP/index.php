<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Tambah Data Nilai</h3>
            </div>
            <div class="col-3">
            </div>
            <div class="col-6">
                <form action="proses.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama lengkap</label>
                        <input type="text" class="form-control" name="name" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mata Kuliah</label>
                        <select class="form-select" name="matkul" id="">
                            <option value="PKN">Pendidikan Kewarga Negaraan</option>
                            <option value="STARISTIK">Statistik</option>
                            <option value="WEB">Pemrograman Web</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai UTS</label>
                        <input type="text" class="form-control" name="uts" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai UAS</label>
                        <input type="text" class="form-control" name="uas" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai Tugas</label>
                        <input type="text" class="form-control" name="tugas" id="">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Kirim">
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>