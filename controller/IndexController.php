<?php
class IndexController extends ControladorBase{
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function index(){
        $datos=new Index($this->adapter);
        $allData=$datos->getAll();
        $this->view("index",array(
            "datos"=>$allData
        ));
    }


}
?>
