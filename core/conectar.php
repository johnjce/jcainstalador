<?php
class Conectar{
    private $driver;
    private $host, $user, $pass, $database, $charset, $socket;

    public function __construct() {
        $db_cfg = require_once 'config/database.php';
        $this->driver=$db_cfg["driver"];
        $this->host=$db_cfg["host"];
        $this->user=$db_cfg["user"];
        $this->pass=$db_cfg["pass"];
        $this->database=$db_cfg["database"];
        $this->charset=$db_cfg["charset"];
        $this->socket=$db_cfg["socket"];
    }

    public function conexion(){

        if($this->driver=="mysql" || $this->driver==null){
            $con=new mysqli($this->host, $this->user, $this->pass, $this->database,$this->socket);
            $con->query("SET NAMES '".$this->charset."'");
        }

        if ($con->connect_error) {
            die('Error de Conexión (' . $con->connect_errno . ') '
                    . $con->connect_error);
        }
       return $con;

    }
}
?>
