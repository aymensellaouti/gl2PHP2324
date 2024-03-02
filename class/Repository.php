<?php 

abstract class Repository  {
    private $db ;
    public function __construct(
        private $tableName
    ) {
        $this->db = ConnexionBD::getInstance();
    }
    function findAll() {
        $req=" select * From {$this->tableName}";
        $reponse = $this->db->query($req);
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }

    function findById($id) {
            $req=" select * From {$this->tableName} where id = ?";
            $reponse = $this->db->prepare($req);
            $reponse->execute($id);
            return $reponse->fetch(PDO::FETCH_OBJ);
    }

    function delete($id) {}

    //['name' => 'aymen', 'age' => 41]
    function insert($data) {
        $keys = array_keys($data);
        // ['name', 'age']
        $keysString = implode(',', $keys);
        $preparedParm =  implode(',', array_fill(0, count($keys), '?'));
        $req = "INSERT INTO {$this->tableName} (`id`, $$keysString) VALUES (null, $preparedParm)";
        $reponse = $this->db->prepare($req);
        $reponse->execute(array_values($data));
        return $reponse->fetchAll(PDO::FETCH_OBJ);
    }
}