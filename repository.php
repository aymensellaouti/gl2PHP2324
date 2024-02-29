<?php 

abstract class Repository {
    private $db;
    public function __construct(protected $tableName) {
        $this->db = ConnexionBD::getInstance();
    }
    public function findAll() {
        $req = "SELECT * FROM {$this->tableName}";
        $response = $this->db->query($req);
        return  $response->fetchAll(PDO::FETCH_OBJ);
    }
    public function findById($id) {
        $req = "SELECT * FROM {$this->tableName} where id = ?";
        $response = $this->db->prepare($req);
        return $response->execute([$id]);
    }
    public function delete() {}
    // ['desigantion' => '', 'autreCham' => '']
    // ||
    // INSERT INTO `job` (`id`, `designation`, `created_at`, `updated_at`) 
    // VALUES (NULL, ?, ?, ?);
    public function insert(array $data) {
        //['designation', 'autreChamp']
        $keys = array_keys($data);
        $keysString = implode(', ', $keys);
        $params = array_fill(0, count($keys),'?');
        //['?', '?', '?', '?', '?']
        $paramsString = implode(', ', $params);
        $request = "INSERT INTO `{$this->tableName}` (`id`, $keysString) VALUES (NULL, $paramsString)";
        $response = $this->db->prepare($request);
        return $response->execute(array_values($data));
    }
    public function update() {}
}