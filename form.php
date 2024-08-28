<!DOCTYPE html>
<html lang="en">
 
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Registro</title>
 
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
 
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" href="css/logins.css">
 
 

  </head>
 
  <body>
  <section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
             <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" /> -->
            </div>
            <form style="width: 33rem;" action="registro.php" method="post">
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Formulario de registro</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" name="nombre" placeholder="Nombre" required id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                      <input type="text" name="apellido" placeholder="Apellido" required id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                    <input type="text" name="email" placeholder="Correo Electrónico" required id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                    <input type="text" name="pwd" placeholder="Contraseña" required id="form3Example1m" class="form-control form-control-lg" />
                    </div>
                  </div>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="comida" placeholder="Comida favorita" required id="form3Example1m" class="form-control form-control-lg" />
                </div>

                

                
                <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="artista" placeholder="Artista favorito" required id="form3Example1m" class="form-control form-control-lg" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="lugar" placeholder="Lugar favorito" required id="form3Example1m" class="form-control form-control-lg" />
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="color" placeholder="Color favorito" required id="form3Example1m" class="form-control form-control-lg" />
                </div>

            

                <div class="d-flex justify-content-end pt-3">
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Resetear</button>
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg ms-2" type="submit">Enviar formulario</button>
                </div>

              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  </body>
 
</html>