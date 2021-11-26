<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>

	<title>Mi Vacuna</title>

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
				<li class="nav-item"><a class="nav-link active" href="<?php echo base_url().'realizar-consulta'; ?>"> <b>🏠 Mi vacuna</b> </a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'login-adm'; ?>"> <b>Centro medico digital</b> </a></li>
			</ul>
		</div>
	</nav>
	<center>
		<br>
		<h1>Bienvenido al sitio web <b>Mi Vacuna</b></h1>
	</center>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded" id="">
					<div class="p-3 mb-2 bg-success text-dark rounded"><h4><b>Consultar</b></h4></div>
					<hr>
					<form action="<?php echo base_url().'mostrar-consulta'; ?>" class="row g-3 needs-validation" method="POST" novalidate>
						<div class="col-md-3">
							<label for="tdocumento" class="form-label">Tipo de documento</label>
							<select name="tdocumento" id="tdocumento" class="form-select" required>
								<option selected disabled value="">Seleccionar...</option>
								<option>Cedula Ciudadanía</option>
								<option>Cedula Extranjería</option>
								<option>Tarjeta Identidad</option>
							</select>
							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<div class="col-md-3">
							<label for="documento" class="form-label">Documento</label>
							<input id="documento" name="documento" type="number" class="form-control" required>
							<div class="invalid-feedback">Completa este campo</div>
						</div>
					<div class="col-md-2 mx-auto">
						<label for="boton" class="form-label">ㅤ</label>
						<button type="submit" class="btn btn-primary fw-bold form-control">Consultar</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
				<?php if($this->session->flashdata("error_cons")): ?>
					<div class="container">
          <div class="card text-center card  bg-danger bg-gradient mb-3">
          <div class="card-header">
            <h4>Usuario no encontrado, contacte con administracion</h4>
          </div>
        </div>
      </div>
        <?php endif; ?>
	   
</body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>

	<script>
		(function () {
  'use strict'

  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
	</script>

<footer class="rounded">&copy; 2021 MI VACUNA</footer>
</body>
</html>