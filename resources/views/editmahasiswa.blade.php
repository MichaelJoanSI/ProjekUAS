<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Data Baru Mahasiswa</title>
  </head>
  <body>
  <div class="container-fluid mt-4 rounded">
    @php
        $bidang_minat = explode(',', $mahasiswa->bidang_minat);
    @endphp
    <form action="/mahasiswa/updatemahasiswa/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
        @csrf
        @method('PUT')
        <div class="form-group w-25">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
        </div>
        <div class="form-group w-25">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
        </div>
        <label>Gender</label>
        <div class="form-check-w-25">
            <input type="radio" name="gender" value="1" {{ $mahasiswa->gender == '1' ? 'checked':"" }} 
            class="form-group-input">
            <label>Laki-laki</label>
        </div>
        <div class="form-check-w-25">
            <input type="radio" name="gender" value="2" {{ $mahasiswa->gender == '2' ? 'checked':"" }}
            class="form-group-input">
            <label>Perempuan</label>
        </div>
        <div class="form-group w-25">
            <label>Jurusan</label>
            <select name="jafung" class="form-control">
                <option value="0">-Pilih Jurusan Fungsional-</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Kedokteran">Kedokteran</option>
                <option value="Akuntansi">Akuntansi</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Random">Random</option>
            </select>
        </div>
        <label>Bidang Minat</label>
        <div class="form-check w-25">
            <input type="checkbox" name="bidang_minat[]" value="Membaca" class="form-group-input">
            <label>Membaca</label>
        </div>
        <div class="form-check w-25">
            <input type="checkbox" name="bidang_minat[]" value="Melukis" class="form-group-input">
            <label>Melukis</label>
        </div>
        <div class="form-check w-25">
            <input type="checkbox" name="bidang_minat[]" value="Steamer" class="form-group-input">
            <label>Steamer</label>
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