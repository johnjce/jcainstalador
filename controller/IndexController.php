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

        //Creamos el objeto datos
        $datos=new Index($this->adapter);

        //Conseguimos todos los datos de la pagína
        $allData=$datos->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "datos"=>$allData
        ));
    }
}
?>
