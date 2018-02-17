<?php
    class categoria extends EntidadBase{
        private $id;
        private $idPadre;
        private $categoria;

        public function __construct($adapter) {
            $table="categoria";
            parent::__construct($table, $adapter);
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria($categoria) {
            $this->categoria = $categoria;
        }

        public function getIdPadre($idPadre) {
            return $this->getById($idPadre)->categoria;
        }

        public function setIdPadre($idPadre) {
            $this->idPadre = $idPadre;
        }


        public function save(){
            $query="INSERT INTO categoria (id,idPadre,categoria)
                    VALUES(NULL,
                           '".$this->idPadre."',
                           '".$this->categoria."');";
            $this->db()->query($query);
        }
    }
?>
