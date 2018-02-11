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
}
?>
