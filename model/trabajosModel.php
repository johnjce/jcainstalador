<?php
class trabajosModel extends ModeloBase{
    private $table;

    public function __construct($adapter){
        $this->table="trabajos";
        parent::__construct($this->table, $adapter);
    }

    //Métodos de consulta

}
?>
