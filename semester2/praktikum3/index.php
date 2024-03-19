<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Akhir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    form {
      background-color:#ADD8E6;
    }
  </style>
</head>
<body> 
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form action="hasil_nilai.php" method="post" class="w-75 mt-5 mx-auto p-4 border shadow-sm">
            <h2 >Form Nilai Akhir Mahasiswa</h2>
        <hr/> 
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="nama" name="Nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="matakuliah" name="matakuliah" class="custom-select" required>
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                            <option value="Basis Data I">Basis Data I</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Bahasa Inggris 1">Bahasa Ingris 1</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                            <option value="komunikasi Efektif">Komunikasi Efektif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-8">
                        <input id="uts" name="UTS" placeholder="Nilai UTS" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-8">
                        <input id="uas" name="UAS" placeholder="Nilai UAS" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
                    <div class="col-8">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-info">Simpan</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
</div>
</body>
</html>