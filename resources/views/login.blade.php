<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Form Login - Dosen</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

<link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="/user/ceklogin" method="POST">
  @csrf
    <img class="mb-4" src="https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/ukdw.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Login</h1>
    @if (session('alert'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('alert') }}</strong>
          <button type="button" class="close" data-dismiss="alert" arial-label="Close">
            <span arial-hidden="true">&times;</span>
          </button>
      </div>
    @endif
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" required autofocus>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; WELCOME</p>
  </form>
</main>   
</body>
</html>