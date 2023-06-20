<?php
function createDbConnection() {
    // $servername = "server42";
    // $username = "natamark_user";
    // $password = "#PZezH*_NZsH";
    // $dbname = "natamark_wedding";
        
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "elalma";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
      return $conn;
}
?>