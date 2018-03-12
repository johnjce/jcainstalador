<?php
    class trabajos extends EntidadBase{
        private $id;
        private $titulo;
        private $descripcion;
        private $categoria;
        private $fotos;
        private $directorio;

        public function __construct($adapter) {
            $table="trabajos";
            parent::__construct($table, $adapter);
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getDescripcion() {
            return $this->descripcion;
        }

        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria($categoria) {
            $this->categoria = $categoria;
        }

        public function setFotos($fotos) {
            $this->fotos = $fotos;
        }

        public function getFotos() {
            return $this->fotos;
        }

        public function getDirectorio($id){
            return $this->getById($id)->directorio;

        }
        public function setDirectorio($directorio) {
            $this->directorio = $directorio;
        }

        public function save(){
            $query="INSERT INTO trabajos (id,titulo,descripcion,fotos,directorio,categoria)
                    VALUES(NULL,
                           '".$this->titulo."',
                           '".$this->descripcion."',
                           '".$this->fotos."',
                           '".$this->directorio."',
                           '".$this->categoria."');";
            $this->db()->query($query);
        }
    }
?>
