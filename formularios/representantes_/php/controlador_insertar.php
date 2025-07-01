
<link href="../../../Libs/sweetalert2-8.2.5/sweetalert.css" rel="stylesheet">
<script src="../../../Libs/jquery.min.js"></script>
<script src="../../../Libs/sweetalert2-8.2.5/sweetalert.min.js"></script>

<?php
    require_once('modelo.php');
    $obj = new clase_representantes();
    $result=$obj->_insertar(
    $_POST['txt_cedula'],
    $_POST['txt_apenom'],
    $_POST['txt_fecnac'],
    $_POST['rad_sexo'],
    $_POST['txt_estciv'],
    $_POST['txt_domici']
    );
    
    if ($result) {
        echo '<script>
                    jQuery(function(){
                    swal({
                    title: "Guardar Representante",
                    text: "Registro guardado con éxito",
                    type: "success",
                    confirmButtonText: "Aceptar"
                    }, function(){
                                location.href = "../vistas/vista_crud_representantes.html";
                    });
                    });
              </script>';
    } else {
        echo '<script>
            jQuery(function(){
            swal({
                title: "Guardar Materia",
                text: "Error al Guardar",
                type: "error",
                confirmButtonText: "Aceptar"
            }, function(){
                location.href = "../vistas/vista_crud_representates.html";
            });
            });
            </script>';
    }
?>

     

