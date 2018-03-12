
<?php
class trabajosModel extends ModeloBase{
    private $table;

    public function __construct($adapter){
        $this->table="trabajos";
        parent::__construct($this->table, $adapter);
    }

    //Métodos de consulta

    public function getAllJobs($page = null, $cat = null){
        $cond="";
        if($cat != null) {
            $cond = " WHERE categoria LIKE '%".$cat."%'";
        }
        if($page != null){
            $sql = "SELECT * FROM trabajos ". $cond ." ORDER BY id DESC LIMIT ". (($page*4)-4) ." , ". ($page*4);
        }else{
            $sql = "SELECT count(*) as nf FROM trabajos  ". $cond ;
        }
        //echo $sql;
       // break;
        $query=$this->ejecutarSql($sql);
        return $query;

    }

    public function getJob($idJob){
        return $this->getById($idJob);
    }
}
?>
