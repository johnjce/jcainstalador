<?php
    class Usuario extends EntidadBase{
        private $id;
        private $nombre;
        private $apellido;
        private $email;
        private $user;
        private $password;
        private $privilegio;
        private $sesion;

        public function __construct($adapter) {
            $table="usuarios";
            parent::__construct($table, $adapter);
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setUser($user) {
            $this->user = $user;
        }

        public function getUser() {
            return $this->user;
        }

        public function setPrivilegio($privilegio) {
            $this->privilegio = $privilegio;
        }

        public function getPrivilegio() {
            return $this->privilegio;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function getSesion() {
            return $this->sesion;
        }

        public function setSesion($sesion) {
            $this->sesion = $sesion;
        }

        public function save(){
            $query="INSERT INTO usuarios (id,nombre,apellido,user,privilegio,sesion,email,password)
                    VALUES(NULL,
                           '".$this->nombre."',
                           '".$this->apellido."',
                           '".$this->user."',
                           '".$this->privilegio."',
                           '".$this->sesion."',
                           '".$this->email."',
                           '".$this->password."');";
            $this->db()->query($query);
        }

        public function validateUser($password) {
            if($this->password == $password){
                return 0;
            }
            return 1;
        }

        public function login(){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['nombre'] = $this->nombre;
            $_SESSION['apellido'] = $this->apellido;
            $_SESSION['user'] = $this->user;
            $_SESSION['email'] = $this->email;
            $_SESSION['privilegio'] = $this->privilegio;//este lo debo manejar con la bd
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (120 * 60);
            $query = "UPDATE usuarios SET sesion = '1' WHERE usuarios.id = ".$this->id;
            return $this->db()->query($query);
        }

        public function logout(){
            session_start();
            unset ($_SESSION['user']);
            session_destroy();
            $query = "UPDATE usuarios SET sesion = '0' WHERE usuarios.id = ".$this->id;
            return $this->db()->query($query);
        }
    }
?>
