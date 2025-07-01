<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Representantes</title>
    <link href="../Libs/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="../Libs/bootstrap-5.3.0/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="container mt-4">
    <h1 class="mb-3">Representantes</h1>
    <div class="mb-3">
        <form method="get" class="d-flex">
            <input type="hidden" name="action" value="index">
            <input class="form-control me-2" type="search" name="search" placeholder="Buscar" value="<?php echo htmlspecialchars($search); ?>">
            <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
    </div>
    <a href="index.php?action=create" class="btn btn-success mb-3">Nuevo</a>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Código</th>
                <th>Cédula</th>
                <th>Apellidos y Nombres</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($representantes as $r): ?>
            <tr>
                <td><?php echo $r['REP_CODIGO']; ?></td>
                <td><?php echo $r['REP_CEDULA']; ?></td>
                <td><?php echo $r['REP_APENOM']; ?></td>
                <td><a class="btn btn-primary btn-sm" href="index.php?action=edit&id=<?php echo $r['REP_CODIGO']; ?>">Editar</a></td>
                <td><button class="btn btn-danger btn-sm" onclick="deleteRepresentante(<?php echo $r['REP_CODIGO']; ?>)">Eliminar</button></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
