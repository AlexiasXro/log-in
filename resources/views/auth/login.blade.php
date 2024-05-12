<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #fccb90;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
      .gradient-form {
        height: 100vh !important;
      }
    }

    @media (min-width: 769px) {
      .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
      }
    }

    .icon-link {
      display: block;
      text-decoration: none;
      color: white;
      padding: 10px 0;

    }

    .icon-link:hover {
      color: rgb(25, 135, 84);
    }

    .icon-link svg {
      fill: currentColor;
      height: 1em;
      width: 1em;
      margin-left: 5px;
    }
  </style>
</head>

<body>

  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <i class="bi bi-person-workspace" style="font-size: 120px; color:#dd3675; filter: drop-shadow(2px 2px 5px #000000);"></i>
                    <h4 class="mt-1 mb-5 pb-1">Inicio de Sesión</h4>
                  </div>

                  <form action="{{route('login.access')}}" method="POST">

                    @csrf
                    <!---el atributo for está vacío/campo de entrada específico --->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="form2Example11" class="form-control" placeholder="Teléfono o correo electrónico" />
                      <label class="form-label" for="form2Example11">Usuario</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" />
                      <label class="form-label" for="form2Example22">Contraseña</label>
                    </div>


                    <div class="text-center pt-1 mb-5 pb-1">
                      <a href="{{route('home_user')}}" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" id="btnIniciarSesion">Iniciar sesión</a>
                      <a class="text-muted" href="{{ route('forg_pass') }}">¿Olvidaste tu contraseña?</a>
                    </div>
                    

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">¿No tenes una cuenta?</p>
                      <a href="{{ route('register') }}" class="btn btn-outline-danger">Crea una</a>

                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">

                  <h4 class="mb-4">Somos más que una compañía</h4>
                  <p class="small mb-0">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus tempore perferendis adipisci atque laudantium, beatae minus molestiae modi expedita nam consequatur obcaecati vero sequi ab? Nemo labore enim laudantium voluptatem.
                  </p>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../../js/usermode.js"></script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>