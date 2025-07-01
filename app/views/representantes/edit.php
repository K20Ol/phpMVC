<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Representante</title>
    <link href="../Libs/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="../Libs/bootstrap-5.3.0/js/bootstrap.min.js"></script>
</head>
<body class="container mt-4">
    <h1 class="mb-3">Editar Representante</h1>
    <form method="post" action="index.php?action=update">
        <input type="hidden" name="id" value="<?php echo $representante['REP_CODIGO']; ?>">
        <div class="mb-3">
            <label class="form-label">Cédula</label>
            <input type="text" name="cedula" class="form-control" value="<?php echo $representante['REP_CEDULA']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="fecnac" class="form-control" value="<?php echo $representante['REP_FECNAC']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos y Nombres</label>
            <input type="text" name="apenom" class="form-control" value="<?php echo $representante['REP_APENOM']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Sexo</label>
            <select name="sexo" class="form-select">
                <option value="1" <?php if($representante['REP_SEXO']==1) echo 'selected'; ?>>Masculino</option>
                <option value="2" <?php if($representante['REP_SEXO']==2) echo 'selected'; ?>>Femenino</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Estado Civil</label>
            <select name="estciv" class="form-select">
                <option value="1" <?php if($representante['REP_ESTCIV']==1) echo 'selected'; ?>>Casada(o)</option>
                <option value="2" <?php if($representante['REP_ESTCIV']==2) echo 'selected'; ?>>Soltera(o)</option>
                <option value="3" <?php if($representante['REP_ESTCIV']==3) echo 'selected'; ?>>Divorciada(o)</option>
                <option value="4" <?php if($representante['REP_ESTCIV']==4) echo 'selected'; ?>>Viuda(o)</option>
                <option value="5" <?php if($representante['REP_ESTCIV']==5) echo 'selected'; ?>>Unión Libre</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="domici" class="form-control" value="<?php echo $representante['REP_DOMICI']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>
