<?php
class Index extends EntidadBase{
    private $description;
    private $title;

    public function __construct($adapter) {
        $table="index_data";
        parent::__construct($table, $adapter);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitel($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function save(){
        $query="INSERT INTO index_data (id,title,description)
                VALUES(NULL,
                       '".$this->title."',
                       '".$this->description."');";
        return $this->db()->query($query);
    }

    function listar_carpetas($carpeta) {
        $ruta = $carpeta . "/";
        $ruta = strtolower($ruta) ;
        if(is_dir($ruta)) {
            if($dir = opendir($ruta)) {
                while(($archivo = readdir($dir)) !== false) {
                    if($archivo != '.' && $archivo != '..') {
                        if (is_dir($ruta.$archivo)) {
                            $this->leer_carpeta($ruta.$archivo);
                        }

                    }
                }
                closedir($dir);
            }
        }
    }

    function leer_carpeta($leercarpeta) {
        $leercarpeta = $leercarpeta . "/";
        if(is_dir($leercarpeta)){
            if($dir = opendir($leercarpeta)){
                while(($archivo = readdir($dir)) !== false){
                    if($archivo != '.' && $archivo != '..') {
                        $info = new SplFileInfo($leercarpeta.$archivo);
                        if($info->getExtension()=='jpg'||$info->getExtension()=='jpeg'||$info->getExtension()=='png');
                        echo '<div data-thumb="./core/thumbnail.php?file=../'.$leercarpeta.$archivo.'&x=100&y=130" data-src="./'.$leercarpeta.$archivo.'"></div>';
                    }
                }
                closedir($dir);
            }
        }
    }
}
?>
