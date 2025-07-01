<?php
    require_once('../php/modelo.php');
    $obj= new clase_representantes();
    $row=$obj->_consultarcodigo($_GET['valor']);
    $fila=$row->fetch();
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualización de datos representante</title>
        <link href="../../../Libs/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="../../../Libs/bootstrap-5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="../../../Libs/jquery.min.js"></script>
        <script src="../../../Libs/ajax.js"></script>
    </head>
<body>
    <form action="../php/actualizar_representantes.php" method="post">
        <input type="text" id="txt_codigo" name="txt_codigo" value="<?php echo $fila['REP_CODIGO'];?>" hidden > 
        <div>
            <h2 class="text-primary">Actualizar representantes</h2>
        </div>
        <div class="container">
            <div class="form-group row">
                <label class="col-12"><b>Cédula</b></label>
                <input type="text" class="form form-control col-4" name="txt_cedula" id="txt_cedula" value="<?php echo $fila['REP_CEDULA'];?>"  required>
            </div>
            <div class="form-group row">
                <label class="col-12"><b>Apellidos y Nombres</b></label>
                <input type="text" class="form-control col-4" name="txt_apenom" id="txt_apenom" value="<?php echo $fila['REP_APENOM'];?>" required>
            </div>
            
            <div class="form-group row">
                <label class="col-12 text-center">
                    <br>
                    <button type="submit" class="btn btn-success">Actualizar Registro</button>
                </label>
            </div>
        </div>
    </form>
</body>
</html>

