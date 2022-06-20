<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Data Baru Dosen</title>
  </head>
  <body>
  <div class="container-fluid mt-4 rounded">
    <form action="/dosen/simpandosen" method="POST" class="pt-2 pb-2">
        @csrf
        <div class="form-group w-25">
            <label>NIDN</label>
            <input type="number" name="nidn" class="form-control" placeholder="Masukan NIDN" requeired>
        </div>
        <div class="form-group w-25">
            <label>Nama Dosen</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
        </div>
        <label>Status</label>
        <div class="form-check-w-25">
            <input type="radio" name="status" value="Dosen Tetap" class="form-group-input">
            <label>Dosen Tetap</label>
        </div>
        <div class="form-check-w-25">
            <input type="radio" name="status" value="Dosen Sementara" class="form-group-input">
            <label>Dosen Sementara</label>
        </div>
        <div class="form-group w-25">
            <label>Jabatan Fungsional</label>
            <select name="jafung" class="form-control">
                <option value="0">-Pilih Jabatan Fungsional-</option>
                <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                <option value="Asisten Ahli">Asisten Ahli</option>
                <option value="Lektor">Lektor</option>
                <option value="Lektor Kepala">Lektor Kepala</option>
                <option value="Guru Besar">Guru Besar</option>
                <option value="Random">Random</option>
            </select>
        </div>
        <label>Bidang Keahlian</label>
        <div class="form-check w-25">
            <input type="checkbox" name="pakar[]" value="Artificial Intelligence" class="form-group-input">
            <label>Artificial Intelligence</label>
        </div>
        <div class="form-check w-25">
            <input type="checkbox" name="pakar[]" value="Web Engineer" class="form-group-input">
            <label>Web Engineer</label>
        </div>
        <div class="form-check w-25">
            <input type="checkbox" name="pakar[]" value="DB Engineer" class="form-group-input">
            <label>DB Engineer</label>
        </div>
        <div class="form-group pt-4">
            <input type="submit" value="SAVE" class="btn btn-outline-primary">
        </div>
    </form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>