
<?php
class trabajosModel extends ModeloBase{
    private $table;

    public function __construct($adapter){
        $this->table="trabajos";
        parent::__construct($this->table, $adapter);
    }

    //Métodos de consulta

    public function getAllJobs(){
        $query=$this->ejecutarSql("SELECT * FROM trabajos ORDER BY id DESC");
        return $query;
    }

    public function getJob($idJob){
        return $this->getById($idJob);
    }
}
?>
