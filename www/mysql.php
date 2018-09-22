<?php
 //INITIALIZE VARS
$conn = $sql = "";
// CREATE CONNECTION WITH RUNNING DB CONTAINER
$conn = new mysqli("memfirst_db_1", "root", "docker");
// CHECK CONNECTION
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// CREATE DATABASE
$sql = "CREATE DATABASE IF NOT EXISTS db_memfirst";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}
// SELECT DATABASE
mysqli_select_db($conn, 'db_memfirst');
// CREATE TABLES
// PLAYER
$sql = "CREATE TABLE IF NOT EXISTS Player (
player_id INT(6) UNSIGNED AUTO_INCREMENT,
first_name VARCHAR(30),
last_name VARCHAR(30),
email VARCHAR(50),
CONSTRAINT PRIMARY KEY(player_id)
)";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table Player: " . $conn->error;
}
// RESERVATION
$sql = "CREATE TABLE IF NOT EXISTS Reservation (
res_id INT(6) UNSIGNED AUTO_INCREMENT,
res_name VARCHAR(30),
num_players INT(1),
reg_date TIMESTAMP,
player1_id INT(6) UNSIGNED,
player2_id INT(6) UNSIGNED,
player3_id INT(6) UNSIGNED,
player4_id INT(6) UNSIGNED,
CONSTRAINT PRIMARY KEY(res_id),
CONSTRAINT FOREIGN KEY (player1_id) REFERENCES Player(player_id),
CONSTRAINT FOREIGN KEY (player2_id) REFERENCES Player(player_id),
CONSTRAINT FOREIGN KEY (player3_id) REFERENCES Player(player_id),
CONSTRAINT FOREIGN KEY (player4_id) REFERENCES Player(player_id)
)";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table Reservation: " . $conn->error;
}
mysqli_close($conn);// CLOSE MYSQL CONNECTION
?>
