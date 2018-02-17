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
            $this->redirect("usuarios", "index");
        }

        public function trabajos(){
            $trabajo=new trabajos($this->adapter);
            $this->redirect("trabajos", "index");
        }

        public function categorias(){
            $trabajo=new categoria($this->adapter);
            $this->redirect("categorias", "index");
        }
    }
?>
