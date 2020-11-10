<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="../resources/src/css/bootstrap.min.css">
        <link rel="stylesheet" href="../resources/src/css/lobibox.css">
        <link rel="stylesheet" href="../resources/src/css/select2.css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
        <title>Gestion de usuarios</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Gestion de usuarios</h2>
                </div>
                <div class="col-md-4">
                    <div class="btn btn-success" id="mostrarYOcultar">Agregar</div>
                </div>
            </div>
            <div class="row" id="bloqueFormulario">
                    <div class="form-column col-md-4">
                        <div class="form-group">
                            <label for="">Userame</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div> 
                    <div class="form-column col-md-4">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                    </div>
                    
                    <div class="form-column col-md-4">
                        <div class="form-group">
                            <label for="">Rol</label>
                           <select name="rol" class="form-control">
                            <option>ADMIN</option>
                            <option value="ANOTHER USER"></option>
                           </select>
                        </div>
                    </div>

                   
                    <div class="clearfix"></div>
                    <div class="form-column col-md-6">
                        <button type="button" name="enviarData" id="enviarData" class="btn btn-success">Enviar info</button>
                    </div>

            </div>
            <table id="tablaUsuarios" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Unername</th>
                    <th>Rol</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "../models/Usuario.php";
                    $objUser = new Usuario();
                    $data = $objUser->getAllUsers();
                   foreach($data as $val){
                
                    echo "<tr>
                            <td>".$val["id"]."</td>
                            <td>".$val["username"]."</td> 
                            <td>".$val["rol"]."</td>
                            <td>".$val["estado"]."</td> 
                         </tr>";

                   }
                ?>
            </tbody>

            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Unername</th>
                    <th>Rol</th>
                    <th>Estado</th>
                </tr>
            </tfoot>
           
            </table>
        </div>

    </body>
    <script src="../resources/src/js/jquery.min.js"></script>
    <script src="../resources/src/js/bootstrap.min.js"></script>
    <script src="../resources/src/js/lobibox.js"></script>
    <script src="../resources/src/js/messageboxes.js"></script>
    <script src="../resources/src/js/notifications.js"></script>
    <script src="../resources/src/js/select2.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script src="../resources/js/usuarios.js"></script>




</html>