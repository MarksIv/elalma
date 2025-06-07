<?php
function createDbConnection() {
    // $servername = "server41";
    // $username = "elalmalv_elalma";
    // $password = "uf1I8)-GsX}a";
    // $dbname = "elalmalv_elalma";
        
    $servername = "localhost";
    $username = "mysql";
    $password = "root";
    $dbname = "elalmalv_elalma";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
      return $conn;
}
?>