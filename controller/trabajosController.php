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
        $trabajo=new trabajos($this->adapter);
        $allCategories=$trabajo->getAllCategories();
        $trabajos = new trabajosModel($this->adapter);
        $alljobs=$trabajos->getAllJobs();
        $this->view("trabajos",array(
            "allJobs"=>$alljobs,
            "allCategories"=>$allCategories
        ));
    }

    public function crear(){
        if(isset($_POST["titulo"])){
            $trabajo=new trabajos($this->adapter);
            $trabajo->setTitulo($_POST["titulo"]);
            $trabajo->setDescripcion($_POST["descripcion"]);
            $i=0;
            if(isset($_POST['categoria'])){
                $cat="{";
                foreach($_POST['categoria'] as $id){
                    $cat.='"';
                    $cat.=str_replace(":", '":"', $id);
                    $cat.='",';
                    $i++;
                }
                $cat = substr($cat, 0, -1)."}";
                $trabajo->setCategoria($cat);
            }else{
                $trabajo->setCategoria("{}");
            }
            $i=0;
            $fotos="{ ";
            foreach($_FILES["files"]['tmp_name'] as $key => $tmp_name){
                if($_FILES["files"]["name"][$key]) {
                    if ($_FILES['files']['type'][$key]=='image/png' || $_FILES['files']['type'][$key]=='image/jpeg'){
                        $filename = $_FILES["files"]["name"][$key];
                        $source = $_FILES["files"]["tmp_name"][$key];
                        $directorio = 'fotos/'.$trabajo->getTitulo().date('ymdhis');

                        if(!file_exists($directorio)){
                            mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
                        }

                        $dir=opendir($directorio);
                        $target_path = $directorio.'/'.$filename;

                        if(move_uploaded_file($source, $target_path)) {
                            $fotos.='"n'.$i.'":"'.$directorio.'/'.$filename.'",';
                            $i++;
                        } else {
                            echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
                        }
                        closedir($dir);
                    } else {
                        echo $_FILES["files"]["name"][$key]." no es una imagen<br>";
                    }
                }
            }
            $fotos=substr($fotos, 0, -1)."}";
            $trabajo->setFotos($fotos);
            $trabajo->save();
            $this->redirect("trabajos", "index");
        }
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
            $trabajo=new trabajos($this->adapter);
            $trabajo->deleteById($id);
        }
        $this->redirect("trabajos", "index");
    }
}
?>
