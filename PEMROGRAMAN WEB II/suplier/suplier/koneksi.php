<?php
$servername = "localhost:4000";
$username = "root";
$password = "";
$dbname = "db_uts_06tplp009_deriandragi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
