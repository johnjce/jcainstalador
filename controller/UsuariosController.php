<?php
class UsuariosController extends ControladorBase{
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function index(){

        //Creamos el objeto usuario
        $usuario=new Usuario($this->adapter);

        //Conseguimos todos los usuarios
        $allusers=$usuario->getAll();


        //Cargamos la vista index y le pasamos valores
        $this->view("usuarios",array(
            "allusers"=>$allusers
        ));
    }

    public function crear(){
        if(isset($_POST["nombre"])){
            //Creamos un usuario
            $usuario=new Usuario($this->adapter);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setUser($_POST["user"]);
            $usuario->setPrivilegio($_POST["privilegio"]);
            $usuario->setSesion($_POST["sesion"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setPassword(sha1($_POST["password"]));
            $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
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
