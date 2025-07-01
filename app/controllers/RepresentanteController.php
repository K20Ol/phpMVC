<?php
require_once __DIR__ . '/../models/Representante.php';

class RepresentanteController {
    private $model;

    public function __construct() {
        $this->model = new Representante();
    }

    public function index() {
        $search = $_GET['search'] ?? '';
        $representantes = $this->model->all($search);
        require __DIR__ . '/../views/representantes/index.php';
    }

    public function create() {
        require __DIR__ . '/../views/representantes/create.php';
    }

    public function store() {
        $data = [
            'cedula' => $_POST['cedula'],
            'apenom' => $_POST['apenom'],
            'fecnac' => $_POST['fecnac'],
            'sexo'   => $_POST['sexo'],
            'estciv' => $_POST['estciv'],
            'domici' => $_POST['domici']
        ];
        $this->model->create($data);
        header('Location: index.php?controller=representante&action=index');
    }

    public function edit() {
        $id = $_GET['id'];
        $representante = $this->model->find($id);
        require __DIR__ . '/../views/representantes/edit.php';
    }

    public function update() {
        $id = $_POST['id'];
        $data = [
            'cedula' => $_POST['cedula'],
            'apenom' => $_POST['apenom'],
            'fecnac' => $_POST['fecnac'],
            'sexo'   => $_POST['sexo'],
            'estciv' => $_POST['estciv'],
            'domici' => $_POST['domici']
        ];
        $this->model->update($id, $data);
        header('Location: index.php?controller=representante&action=index');
    }

    public function delete() {
        $id = $_POST['id'];
        $this->model->delete($id);
        echo json_encode(['success' => true]);
    }
}
?>
