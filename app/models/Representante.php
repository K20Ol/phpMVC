<?php
require_once __DIR__ . '/../config/Database.php';

class Representante {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function all($search = '') {
        if ($search === '') {
            $stmt = $this->db->query('SELECT * FROM snp_repr');
        } else {
            $stmt = $this->db->prepare('SELECT * FROM snp_repr WHERE REP_APENOM LIKE :s OR REP_CEDULA LIKE :s');
            $stmt->execute([':s' => "%$search%"]);
        }
        return $stmt->fetchAll();
    }

    public function find($id) {
        $stmt = $this->db->prepare('SELECT * FROM snp_repr WHERE REP_CODIGO = :id');
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function create($data) {
        $stmt = $this->db->prepare('INSERT INTO snp_repr (REP_APENOM, REP_CEDULA, REP_FECNAC, REP_SEXO, REP_ESTCIV, REP_DOMICI) VALUES (:apenom, :cedula, :fecnac, :sexo, :estciv, :domici)');
        return $stmt->execute([
            ':apenom' => $data['apenom'],
            ':cedula' => $data['cedula'],
            ':fecnac' => $data['fecnac'],
            ':sexo'   => $data['sexo'],
            ':estciv' => $data['estciv'],
            ':domici' => $data['domici']
        ]);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare('UPDATE snp_repr SET REP_APENOM=:apenom, REP_CEDULA=:cedula, REP_FECNAC=:fecnac, REP_SEXO=:sexo, REP_ESTCIV=:estciv, REP_DOMICI=:domici WHERE REP_CODIGO = :id');
        $data['id'] = $id;
        return $stmt->execute([
            ':apenom' => $data['apenom'],
            ':cedula' => $data['cedula'],
            ':fecnac' => $data['fecnac'],
            ':sexo'   => $data['sexo'],
            ':estciv' => $data['estciv'],
            ':domici' => $data['domici'],
            ':id'     => $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare('DELETE FROM snp_repr WHERE REP_CODIGO = :id');
        return $stmt->execute([':id' => $id]);
    }
}
?>
