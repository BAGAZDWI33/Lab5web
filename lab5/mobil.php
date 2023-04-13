<?php
require_once('database.php');

class Mobil {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insertData($merek, $model, $tahun) {
        $sql = "INSERT INTO mobil (merek, model, tahun) VALUES ('$merek', '$model', '$tahun')";
        return $this->db->executeNonQuery($sql);
    }

    public function getData() {
        $sql = "SELECT * FROM mobil";
        $result = $this->db->executeQuery($sql);
        $data = array();
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
?>
