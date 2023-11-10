<?php
class dbcon {
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "dlstore2";
    public $db; // Thêm thuộc tính này

    function __construct() {
        $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        $this->db->set_charset("utf8");
    }
    public function query($sql) {
        return $this->db->query($sql);
    }
}

?>