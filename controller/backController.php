<?php
    class backController  extends ControladorBase{
        public function __construct() {
            parent::__construct();
            $this->conectar = new Conectar();
            $this->adapter = $this->conectar->conexion();
            $this->usuario = new Usuario($this->adapter);
        }

        public function index(){
            $this->view("indexb",array(""=>""));
        }

        public function usuarios(){
            $usuario=new Usuario($this->adapter);
            $allusers=$usuario->getAll();
            $this->view("usuarios",array(
                "allusers"=>$allusers
            ));
        }

        public function trabajos(){
            $this->view("trabajos",array(""=>""));
        }
    }
?>
