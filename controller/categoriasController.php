<?php
class categoriasController extends ControladorBase{
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function index(){
        $categoria=new categoria($this->adapter);
        $allCategories=$categoria->getAllCategories();
        $this->view("categorias",array(
            "allCategories"=>$allCategories
        ));
    }

    public function crear(){
        if(isset($_POST["categoria"])){
            $categoria=new categoria($this->adapter);
            $categoria->setCategoria($_POST["categoria"]);
            $categoria->setIdPadre($_POST["idPadre"]);
            $categoria->save();
            $this->redirect("categorias", "index");
        }
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
            $categoria=new categoria($this->adapter);
            $categoria->deleteById($id);
        }
        $this->redirect("categorias", "index");
    }
}
?>
