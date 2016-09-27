<?php
class DB_Connect {
    // constructor
    function __construct() {
    }
    // destructor
    function __destruct() {
        // $this->close();
    }
    // Connecting to database
    public function connect() {
        require_once 'config.php';
        // connecting to mysql
        $mysqli = new mysqli(DB_HOST, DB_USER,DB_PASSWORD, DB_DATABASE);
        if ($mysqli -> connect_errno) {
            die( "Fallo la conexión a MySQL: (" . $this->$mysqli -> mysqli_connect_errno() 
                . ") " . $mysqli -> mysqli_connect_error());
        }
        return $mysqli;
    }
}
?>