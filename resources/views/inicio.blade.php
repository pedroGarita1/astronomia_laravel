<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ASTRONOMIA - INICIO -</title>
</head>
<body class="bg-dark">
    <!-- Header -->
<header class="border-bottom text-center py-5 mb-4">
    <div class="container">
      <h1 class="fw-light text-white">PAGINA WEB DE LA ASTRONOMIA</h1>
    </div>
  </header>
  
  <!-- Page Content -->
  <div class="container mt-5">
    <div class="row">
      <!-- Team Member 1 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="info-general">
            <div class="card border-0 shadow">
                <img src="{{ asset('img/universo.jpg') }}" class="card-img-top" style="height: 215px; width: 306px;" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title mb-0">Informacion de la Astronomia</h5>
                    <div class="card-text text-black-50">Web Developer</div>
                </div>
            </div>
        </a>
      </div>
      <!-- Team Member 2 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="campo-astronomia">
            <div class="card border-0 shadow">
                <img src="{{ asset('img/estrellas.gif') }}" class="card-img-top" style="height: 215px; width: 306px;" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title mb-0">Campos de la Astronomia</h5>
                <div class="card-text text-black-50">Web Developer</div>
              </div>
            </div>
        </a>
      </div>
      <!-- Team Member 3 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="aportacion-astronomia">
            <div class="card border-0 shadow">
                <img src="{{ asset('img/agujero_negro.jpg') }}" class="card-img-top" style="height: 215px; width: 306px;" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title mb-0">Aportacion de la Astronomia</h5>
                <div class="card-text text-black-50">Web Developer</div>
              </div>
            </div>
        </a>
      </div>
      <!-- Team Member 4 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href="teorias-astronomia">
            <div class="card border-0 shadow">
                <img src="{{ asset('img/teorias_universo.jpg') }}" class="card-img-top" style="height: 215px; width: 306px;" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title mb-0">Teorias de la astronomia</h5>
                <div class="card-text text-black-50">Web Developer</div>
              </div>
            </div>
        </a>
      </div>
    </div>
    <!-- /.row -->
  
  </div>
  <!-- /.container -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>