<?php 

abstract class Repository {
    private $db = null;
    public function __construct(private $tableName) {
        $this->db = ConnexionBD::getInstance();
    }
    
    public function findAll() {
        $query = "select * from {$this->tableName}";
        $response = $this->db->query($query);
        $jobs = $response->fetchAll(PDO::FETCH_OBJ);
        return $jobs;
    }

    
    public function findById($id) {
        $query = "select * from  {$this->tableName} where id = ?";
        $ps = $this->db->prepare($query);
        //exécute la requete
        $ps->execute([$id]); 
        return $ps->fetch(PDO::FETCH_OBJ);
    }

    
    /*
        ['designation' => 'designationValue', "age" => "41"];
        INSERT INTO `personne` (`id`, `firstname`, `name`, `age`, `profile_id`, `job_id`, `created_at`, `updated_at`, `image`, `created_by_id`) VALUES (NULL, ?, 'as', '41', NULL, NULL, NULL, NULL, NULL, NULL);

    */
    public function insert() {
           /* array_keys();
            array_fill(0, count($values), '?');
            implode(',', $values);
            */
    }
}