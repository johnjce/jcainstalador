<?php
class trabajosController extends ControladorBase{
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function index(){
        $trabajo=new trabajo($this->adapter);
        $alljobs=$trabajo->getAll();
        $this->view("tabajos",array(
            "alljobs"=>$alljobs
        ));
    }

    public function crear(){
        if(isset($_POST["titulo"])){
            $trabajo=new trabajo($this->adapter);
            $trabajo->setTitulo($_POST["titulo"]);
            $trabajo->setDescripcion($_POST["descripcion"]);
            $trabajo->setCategoria($_POST["categoria"]);
            $trabajo->setFotos($_POST["files"]);
            $save=$trabajo->save();
        }
        $this->redirect("trabajos", "index");
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
            $usuario=new Usuario($this->adapter);
            $usuario->deleteById($id);
        }
        $this->redirect("Usuarios", "index");
    }
}
?>
