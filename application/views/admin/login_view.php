<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
  <title>Login</title>

  <link rel="icon" type="image/ico" href="images/image1.ico" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>


<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top rounded">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#firstNavbar" aria-controls="firstNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="firstNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'sitios-vacuna'; ?>"> <b>💉Sitios de Vacunacion</b> </a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'realizar-consulta'; ?>"> <b>🏠 Mi vacuna</b> </a></li>
        <li class="nav-item"><a class="nav-link active" href="<?php echo base_url().'login-adm'; ?>"> <b>Centro medico digital</b> </a></li>
      </ul>
    </div>
  </nav>

  <br>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
          <div class="card text-center card  bg-default mb-3">
            <form action="<?php echo base_url().'Admin/autenticacion'; ?>" method="POST" >
             <div class="card-header">
               <h3><b>LOGIN</b></h3>
             </div>
            <div class="card-body">
              <input name="user" type="text" id="userName" class="form-control input-sm chat-input" placeholder="Usuario" required/>
              <br>
              <input name="pass" type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="Contraseña" required/>
            </div>
          <div class="card-footer text-muted">
            <button type="submit" class="btn btn-success">Ingresar</button>
          </div>
          </form>
        </div>
        <?php if($this->session->flashdata("error_aut")): ?>
          <div class="card text-center card mb-3 bg-danger bg-gradient">
          <div class="card-header bg-danger bg-gradient">
            <h4>Datos ingresados incorrectos</h4>
          </div>
        <?php endif; ?>
        </div>
    </div>
  </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
<footer class="rounded">&copy; 2021 MI VACUNA</footer>
</html>