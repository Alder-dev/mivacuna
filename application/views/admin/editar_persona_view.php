<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
		shrink-to-fit=no">

<head>

	<title>Mi Vacuna</title>

	<link rel="icon" type="image/ico" href="../images/image1.ico" />
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/font.css">
	<link rel="stylesheet" href="../css/estilos.css">


</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top rounded">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firstNavbar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="firstNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'sitios-vacuna'; ?>"> <b>💉Sitios de Vacunacion</b> </a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'realizar-consulta'; ?>"> <b>🏠 Mi vacuna</b> </a></li>
				<li class="nav-item"><a class="nav-link active" href="<?php echo base_url().'login-adm'; ?>"> <b>Centro medico digital</b> </a></li>
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
					<div class="p-3 mb-2 bg-success text-dark rounded"><h4><b>Modificar</b></h4></div>
					<hr>
					<form action="<?php echo base_url().'Admin/actualizar'; ?>" class="row g-3 needs-validation" method="POST" novalidate>
						<input type="hidden" name="id" value="<?php echo $persona->_id; ?>">
						<div class="p-3 mb-2 bg-secondary text-dark rounded"><h5><b>1. Datos personales</b></h5></div>
						<div class="col-md-3">
							<label for="nombres" class="form-label">Nombres</label>
							<input id="nombres" name="nombres" type="text" class="form-control" value="<?php echo $persona->nombres; ?>" required>
							<div class="invalid-feedback">Completa este campo</div>
						</div>
						<div class="col-md-3">
							<label for="apellidos" class="form-label">Apellidos</label>
							<input id="apellidos" name="apellidos" type="text" class="form-control" value="<?php echo $persona->apellidos; ?>" required>
							<div class="invalid-feedback">Completa este campo</div>
						</div>
						<div class="col-md-3">
							<label for="tdocumento" class="form-label">Tipo de documento</label>
							<select name="tdocumento" id="tdocumento" class="form-select" required>
								<option disabled id="<?php echo $persona->tdocumento; ?>" style="display: none;"></option>
								<option>Cedula Extranjería</option>
								<option >Cedula Ciudadanía</option>
								<option>Tarjeta Identidad</option>
							</select>

							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<div class="col-md-3">
							<label for="documento" class="form-label">Documento</label>
							<input id="documento" name="documento" type="number" class="form-control" value="<?php echo $persona->documento; ?>" required>
							<div class="invalid-feedback">Completa este campo</div>
						</div>
						<div class="col-md-2">
							<label for="sexo" class="form-label">Sexo</label>
							<select name="sexo" id="sexo" class="form-select" required>
								<option selected disabled id="<?php echo $persona->sexo; ?>" style="display: none;"></option>
								<option>Masculino</option>
								<option>Femenino</option>
								<option>No especificado</option>
							</select>
							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<div class="col-md-2">
							<label for="estrato" class="form-label">Estrato socioeconomico</label>
							<select name="estrato" id="estrato" class="form-select" required>
								<option selected disabled id="<?php echo $persona->estrato; ?>" style="display: none;"></option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
							</select>
							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<div class="col-md-3">
							<label for="municipio" class="form-label">Municipio</label>
							<select name="municipio" id="municipio" class="form-select" required>
								<option selected disabled id="<?php echo $persona->municipio; ?>" style="display: none;"></option>
								<option>Alto Baudó</option>
								<option>Quibdó</option>
								<option>istmina</option>
								<option>Nuquí</option>
								<option>Medio Baudó</option>
								<option>Tadó</option>
							</select>
							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<div class="col-md-3">
							<label for="direccion" class="form-label">Direccion</label>
							<input id="direccion" name="direccion" type="text" class="form-control" value="<?php echo $persona->direccion; ?>" required>
							<div class="invalid-feedback">Completa este campo</div>
						</div>
						<div class="col-md-2">
							<label for="nacimiento" class="form-label rounded">Fecha de nacimiento</label>
							<input class="form-control" type="date" id="nacimiento" name="nacimiento" value="<?php echo $persona->nacimiento; ?>" required>
							<div class="invalid-feedback">Completa este campo</div>
						</div>
						<hr>
						<div class="p-3 mb-2 bg-secondary text-dark rounded"><h5><b>2. Datos medicos</b></h5></div>
						<div class="col-md-2">
							<label for="eps" class="form-label">EPS</label>
							<select name="eps" id="eps" class="form-select" required>
								<option selected disabled id="<?php echo $persona->eps; ?>" style="display: none;"></option>
								<option>Nueva EPS</option>
								<option>Coomeva</option>
								<option>Sura</option>
								<option>Savia Salud</option>
								<option>Otra</option>
							</select>
							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<div class="col-md-2">
							<label for="estado" class="form-label">Estado</label>
							<select name="estado" id="estado" class="form-select" required>
								<option selected disabled id="<?php echo $persona->estado; ?>" style="display: none;"></option>
								<option>Vacunado</option>
								<option>En espera</option>
								<option>Sin vacunar</option>
								<option>No puede vacunarse</option>
							</select>
							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<div class="col-md-2">
							<label for="discapacidad" class="form-label">Discapacidad</label>
							<select name="discapacidad" id="discapacidad" class="form-select" required>
								<option selected disabled id="<?php echo $persona->discapacidad; ?>" style="display: none;"></option>
								<option>Ninguna</option>
								<option>Fisica o motora</option>
								<option>Auditiva</option>
								<option>Sensorial</option>
								<option>Intelectual</option>
								<option>Psiquica</option>
							</select>
							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<div class="col-md-2">
							<label for="sangre" class="form-label">Tipo de sangre</label>
							<select name="sangre" id="sangre" class="form-select" required>
								<option selected disabled id="<?php echo $persona->sangre; ?>" style="display: none;"></option>
								<option>O+</option>
								<option>O-</option>
								<option>A+</option>
								<option>A-</option>
								<option>AB+</option>
								<option>AB-</option>
								<option>B+</option>
								<option>B-</option>
							</select>
							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<div class="col-md-4">
							<label for="medico" class="form-label">Medico Admin</label>
							<select name="medico" id="medico" class="form-select" required>
								<option selected disabled id="<?php echo $persona->medico; ?>" style="display: none;"></option>
								<option>Dr. x</option>
								<option>Dra. Y</option>
								<option>Enfermera Z</option>
								<option>Auxiliar A</option>
							</select>
							<div class="invalid-feedback">Selecciona una opcion</div>
						</div>
						<hr>
						<div class="p-3 mb-2 bg-secondary text-dark rounded"><h5><b>3. Datos de vacunacion</b></h5></div>
							<div class="col-md-2">
								<label for="vacuna" class="form-label">Vacuna</label>
								<select name="vacuna" id="vacuna" class="form-select">
									<option selected disabled id="<?php echo $persona->vacuna; ?>" style="display: none;"></option>
									<option>Pfizer-BioNTech</option>
									<option>Moderna</option>
									<option>Johnson & Johnson</option>
								</select>
							</div>
							<div class="col-md-2">
								<label for="fechaVacuna" class="form-label rounded">Fecha de vacunacion</label>
								<input readonly class="form-control" type="text" id="fechaVacuna" name="fechaVacuna">
							</div>
							<div class="col-md-2">
								<label for="fechaPvacuna" class="form-label rounded">Fecha de prox. vacunacion</label>
								<input readonly class="form-control" value="<?php echo $persona->fechaPvacuna; ?>" type="text" id="fechaPvacuna" name="fechaPvacuna">
							</div>
							<div class="col-md-2">
								<label for="svacuna" class="form-label">Sitio de vacunacion</label>
								<select name="svacuna" id="svacuna" class="form-select">
									<option selected disabled id="<?php echo $persona->svacuna; ?>" style="display: none;"></option>
									<option>Centro Comercial</option>
									<option>H San Francisco</option>
									<option>H Ismael Roldan</option>
									<option>Megacolegio MIA</option>
								</select>
								<div class="invalid-feedback">Selecciona una opcion</div>
							</div>
					<div class="col-md-2 mx-auto">
						<label for="boton" class="form-label">ㅤ</label>
						<button type="submit" class="btn btn-primary fw-bold form-control">Enviar</button>
					</div>
					<div class="col-md-2 mx-auto">
						<label for="boton" class="form-label">ㅤ</label>
						<a href="<?php echo base_url().'dashboard-admin-modify'; ?>" class="btn btn-danger fw-bold form-control">Cancelar</a>
					</div>
				</form>
				</div>
			</div>
		</div>

</body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

	<script type="text/javascript">
								const documentValue = document.querySelector("#tdocumento > option").id;
								document.querySelector("#tdocumento").value = documentValue;

								const sexoValue = document.querySelector("#sexo > option").id;
								document.querySelector("#sexo").value = sexoValue;

								const estratoValue = document.querySelector("#estrato > option").id;
								document.querySelector("#estrato").value = estratoValue;

								const municipioValue = document.querySelector("#municipio > option").id;
								document.querySelector("#municipio").value = municipioValue;

								const epsValue = document.querySelector("#eps > option").id;
								document.querySelector("#eps").value = epsValue;

								const estadoValue = document.querySelector("#estado > option").id;
								document.querySelector("#estado").value = estadoValue;

								const discapacidadValue = document.querySelector("#discapacidad > option").id;
								document.querySelector("#discapacidad").value = discapacidadValue;

								const sangreValue = document.querySelector("#sangre > option").id;
								document.querySelector("#sangre").value = sangreValue;

								const medicoValue = document.querySelector("#medico > option").id;
								document.querySelector("#medico").value = medicoValue;

								const vacunaValue = document.querySelector("#vacuna > option").id;
								document.querySelector("#vacuna").value = vacunaValue;

								const svacunaValue = document.querySelector("#svacuna > option").id;
								document.querySelector("#svacuna").value = svacunaValue;

								
							</script>

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
							<script type="text/javascript">
						date = new Date();
						d = date.getDate();
						m = date.getMonth() + 1;
						a = date.getFullYear();
						document.getElementById("fechaVacuna").value = value = d+ "/" +m+ "/" +a;
						</script>
				<script type="text/javascript">
						const getVacuna = document.getElementById("vacuna");
						const getFvacuna = document.getElementById("fechaPvacuna");
						const getEstado = document.getElementById("estado");

						getVacuna.addEventListener("change", (e) => {
							console.log(e.target.value);
						if (e.target.value.trim() === "Johnson & Johnson".trim()){
							getFvacuna.value = "";
							getEstado.value = "Vacunado"
						}else{
							function agregarMesesFecha(fecha, n = 1) {
			    		return new Date(fecha.setMonth(fecha.getMonth() + n));	
						}
						var fecha = new Date();
						var resultado = agregarMesesFecha(fecha, 2);

						var dia = fecha.getDate();
						var mes = fecha.getMonth() + 1;
						var ano = fecha.getFullYear();

						getFvacuna.value = dia+ "/" +mes+ "/" +ano;
						getEstado.value = "En espera"
						}
						});
			</script>
<footer class="rounded">&copy; 2021 MI VACUNA</footer>
</body>
</html>