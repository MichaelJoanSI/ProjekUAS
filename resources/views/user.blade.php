<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdolivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Form User</title>
  </head>
  <body>
  <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-primary py-4">
            <div class="dropdown float-right">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill"></i>User
              </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Michael Joan R</a>
              <a class="dropdown-item" href="/user">Data Pengguna</a>
              <a class="dropdown-item" href="/logout">Logout</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 vh-100">
              <div class="nav flex-column nav-pills py-4" role="tablist" ariaorientation="vertical">
                  <a class="nav-link rounded-0 p-2 border {[ (@yield('article') == 'Nidn' ? 'active':'') ]}" href="/">NIDN</a>
                  <a class="nav-link rounded-0 p-2 border {[ (@yield('article') == 'Nama' ? 'active':'') ]}" href="/nama">NAMA</a>
                  <a class="nav-link rounded-0 p-2 border {[ (@yield('article') == 'Status' ? 'active':'') ]}" href="/status">STATUS</a>
                  <a class="nav-link rounded-0 p-2 border {[ (@yield('article') == 'Jafung' ? 'active':'') ]}" href="/jafung">JAFUNG</a>
                  <a class="nav-link rounded-0 p-2 border {[ (@yield('article') == 'Pakar' ? 'active':'') ]}" href="/pakar">PAKAR</a>
                </div>
              <div class="col">
              </div>
            </div>
            <div class="col-lg-10 vb-100">
              <div class="card mp-4">
                  <div class="card-header">
                    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/dosen/cari">
                      <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                      <div class="card-body">
                        @if (session('alert'))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('alert') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                              <span arial-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif
                      <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama Pengguna</th>
                              <th scope="col">Email Pengguna</th>
                              <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <a name="" class="btn btn-primary" href="/user/formuliruser" role="button"><i class="bi bi-plus-square-fill"></i> ADD USER</a>
                          @foreach($user as $no => $u)
                            <tr>
                              <th scope="row">{{$user->firstItem() + $no}}</th>
                              <td>{{$u -> name}}</td>
                              <td>{{$u -> email}}</td>
                              <td>
                                <a href="/user/edituser/{{ $u->id }}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                                <a href="/user/hapususer/{{ $u->id }}" class="btn btn-outline-danger"><i class="bi bi-x-square"></i></a>
                              </td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                      <span class="float-right">{{ $user->links() }}</span>
                  </div>
                </div>
              </div>
            </div>
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