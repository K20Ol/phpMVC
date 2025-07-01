<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Representante</title>
    <link href="../Libs/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="../Libs/bootstrap-5.3.0/js/bootstrap.min.js"></script>
</head>
<body class="container mt-4">
    <h1 class="mb-3">Nuevo Representante</h1>
    <form method="post" action="index.php?action=store">
        <div class="mb-3">
            <label class="form-label">Cédula</label>
            <input type="text" name="cedula" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="fecnac" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos y Nombres</label>
            <input type="text" name="apenom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Sexo</label>
            <select name="sexo" class="form-select">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Estado Civil</label>
            <select name="estciv" class="form-select">
                <option value="1">Casada(o)</option>
                <option value="2">Soltera(o)</option>
                <option value="3">Divorciada(o)</option>
                <option value="4">Viuda(o)</option>
                <option value="5">Unión Libre</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="domici" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>
