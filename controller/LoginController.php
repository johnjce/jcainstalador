<?php
class LoginController extends ControladorBase{
    public $conectar;
    public $adapter;
    private $usuario;

    public function __construct() {
        parent::__construct();

        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
        $this->usuario = new Usuario($this->adapter);
    }

    public function index(){
        $this->view("login",array(""=>""));
    }

    function login(){
        if(!isset($_POST['login-form'])){
            $this->view("login",array("error"=>"Error: intenta ingresar sin intoducir los datos de usuario"));
        }else{
            if(!isset($_POST['user']) || !isset($_POST['password']) || $_POST['user'] == null || $_POST['password'] == null){
                $this->view("login",array("error"=>"Error: Usuario o Contraseña no ingresados."));
            }
            else{
                if($this->usuario->getBy("user",$_POST["user"]) != 0){
                    $users = $this->usuario->getBy("user",$_POST["user"]);
                    foreach($users as $user) {
                        $this->usuario->setId($user->id);
                        $this->usuario->setNombre($user->nombre);
                        $this->usuario->setApellido($user->apellido);
                        $this->usuario->setEmail($user->email);
                        $this->usuario->setUser($user->user);
                        $this->usuario->setPassword($user->password);
                        $this->usuario->setPrivilegio($user->privilegio);
                        $this->usuario->setSesion(1);
                    }
                    if($this->usuario->validateUser(sha1($_POST['password'])) == 0){
                        $this->usuario->login();
                        $this->redirect("back","index");
                    }else{
                        $this->view("login",array("error"=>"Error: Password Incorrecto."));
                    }
                }else{
                    $this->view("login",array("error"=>"Error: Usuario Incorrecto."));
                }
            }
        }
    }

    function logout(){
        $this->usuario->logout();
        $this->redirect("login","index");
    }
}
?>
