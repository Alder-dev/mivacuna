<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro extendido</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

    <body id="page-top">
        <h1 class="h3 mb-0 text-gray-800"><b>LISTA DE PERSONAS EXT<input class="form-control" id="search" type="text" placeholder="Buscar..."></b></h1>  
        <div class="shadow-lg p-3 mb-5 mt-6 bg-body rounded">
          <table id="example" class="table table-striped">
            <thead>
                    <tr>
                        <th>Estado</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Tipo de documento</th>
                        <th>Documento</th>
                        <th>Sexo</th>
                        <th>Estrato</th>
                        <th>Municipio</th>
                        <th>Direccion</th>
                        <th>F. Nacimiento</th>
                        <th>EPS</th>
                        <th>Discapacidad</th>
                        <th>G. sanguineo</th>
                        <th>Medico</th>
                        <th>Vacuna</th>
                        <th>Fecha Vacunacion</th>
                        <th>Fecha Prox. Vacunacion</th>
                        <th>Lugar Vacunacion</th>
                    </tr>
                </thead>
                <tbody id="tbdy">
                    <?php if(!empty($personas)): ?>
                    <?php foreach ($personas as $persona ):?>

                    <td> <?php echo $persona->estado; ?></td>
                    <td> <?php echo $persona->nombres; ?> </td>
                    <td> <?php echo $persona->apellidos; ?> </td>
                    <td> <?php echo $persona->tdocumento; ?> </td>
                    <td> <?php echo $persona->documento; ?> </td>
                    <td> <?php echo $persona->sexo; ?> </td>
                    <td> <?php echo $persona->estrato; ?> </td>
                    <td> <?php echo $persona->municipio; ?> </td>
                    <td> <?php echo $persona->direccion; ?> </td>
                    <td> <?php echo $persona->nacimiento; ?> </td>
                    <td> <?php echo $persona->eps; ?> </td>
                    <td> <?php echo $persona->discapacidad; ?> </td>
                    <td> <?php echo $persona->sangre; ?> </td>
                    <td> <?php echo $persona->medico; ?> </td>
                    <td> <?php echo $persona->vacuna; ?> </td>
                    <td> <?php echo $persona->fechaVacuna; ?> </td>
                    <td> <?php echo $persona->fechaPvacuna; ?> </td>
                    <td> <?php echo $persona->svacuna; ?> </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Está seguro?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Salir</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="<?php echo base_url().'login-adm'; ?>">Salir</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script>
        $(document).ready(function(){
          $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tbdy tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>