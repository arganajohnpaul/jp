<?php
error_reporting(0);
$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASSWORD = "root";
$DATABASE_DBNAME = "arden";


$conn = mysqli_connect ($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_DBNAME);

if (!$conn)
{
    die ("Connection failed: " . mysqli_connect_error());
}

// create table
$sql = "CREATE TABLE ContactUs (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50),
message VARCHAR(30) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

?>
