<div class="col-lg-10 vh-100 mt-4 ">
  <a name="" id="" class="btn btn-primary" href="/mahasiswa/formulir" role="button"><i class="bi bi-plus-square-fill"></i>ADD MAHASISWA BARU</a>
      <form class="form-inline my-2 my-lg-0 float-right" method='GET' action="/mahasiswa/cari"> 
        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
  <table class="table table-hover mt-4">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nim</th>
          <th scope="col">nama</th>
          <th scope="col">gender</th>
          <th scope="col">jurusan</th>
          <th scope="col">bidang_minat</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($mahasiswa as $m)
          <tr>
              <td>{{$m -> id}}</td>
              <td>{{$m -> nim}}</td>
              <td>{{$m -> nama}}</td>
              <td>{{$m -> gender}}</td>
              <td>{{$m -> jurusan}}</td>
              <td>{{$m -> bidang_minat}}</td>
            </tr>
          @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="col-md-5">
        <span >data perpage= {{$mahasiswa -> count()}}</span>  
        <span>total mahasiswa = {{$mahasiswa -> total()}}</span> 
      </div>
      <div class="col-md-5">
      <span>{{$mahasiswa -> links()}}</span> 
    </div>
</div>   
</div>