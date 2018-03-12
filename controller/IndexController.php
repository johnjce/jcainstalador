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
        $this->view("index",array(
            "datos"=>$this->getAllData()
        ));
    }

    public function trabajos(){
        $trabajos = new trabajosModel($this->adapter);
        $alljobs=$trabajos->getAllJobs();
        $this->view("trabajosF",array(
            "allJobs"=>$alljobs,
            "allCategories"=>$this->getAllCategories(),
            "datos"=>$this->getAllData()
        ));
    }

    public function contacto(){
        $this->view("contacto",array(
            "datos"=>$this->getAllData()
        ));
    }

    public function contactoEnviar(){
        if(isset($_POST['nombre']) && isset($_POST['email'])){
            if($_POST['nombre'] != "" && $_POST['email'] != ""){
                $mail = "Nombre: ".$_POST['nombre'];
                $mail+= "e-mail: ".$_POST['email'];
                $mail+= "web: ".$_POST['website'];
                $mail+= "mensaje: ".$_POST['comment'];

                $asunto = "Contacto desde JCAInstaladore";
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                $headers .= "From: Geeky Theory < jac@jcainstaladores.com >\r\n";
                if(mail("jjcinformatik@gmail.com",$asunto,$mail,$headers)){
                    $info= "Mensaje enviado, nos pondremos en contacto lo antes posible.";
                }else{
                    $info= "Mensaje no enviado, ha ocurrido un error intentelo de nuevo.";
                }
            }
        }
        $this->view("contacto",array(
            "datos"=>$this->getAllData(),
            "info"=>$info
        ));
    }

    public function trabajo(){
        if(isset($_GET['trabajo'])){
            $this->view("trabajo",array(
                "datos"=>$this->getAllData(),
                "allCategories"=>$this->getAllCategories(),
                "job"=>$this->getJob($_GET['trabajo'])
            ));
        }
    }

    public function getAllData(){
        $datos=new Index($this->adapter);
        return $datos->getAll();
    }

    public function getAllCategories(){
        $trabajo=new trabajos($this->adapter);
        return $trabajo->getAllCategories();
    }

    public function getJob($idJob){
        $trabajo = new trabajosModel($this->adapter);
        return $trabajo->getJob($idJob);
    }
}
?>
