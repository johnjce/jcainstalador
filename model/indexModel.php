<?php
class IndexModel extends ModeloBase{
    private $table;

    public function __construct($adapter){
        $this->table="index_data";
        parent::__construct($this->table, $adapter);
    }

    //Metodos de consulta
    public function getUnaInfo(){
        $query="SELECT * FROM index_data WHERE id='1'";
        $data=$this->ejecutarSql($query);
        return $data;
    }
}
?>
