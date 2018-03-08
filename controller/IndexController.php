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

    public function trabajos(){
        $trabajo=new trabajos($this->adapter);
        $allCategories=$trabajo->getAllCategories();
        $trabajos = new trabajosModel($this->adapter);
        $alljobs=$trabajos->getAllJobs();
        $datos=new Index($this->adapter);
        $allData=$datos->getAll();
        $this->view("trabajosF",array(
            "allJobs"=>$alljobs,
            "allCategories"=>$allCategories,
            "datos"=>$allData
        ));
    }

    public function contacto(){
        $datos=new Index($this->adapter);
        $allData=$datos->getAll();
        $this->view("contacto",array(
            "datos"=>$allData
        ));
    }


}
?>
