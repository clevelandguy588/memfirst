<?php
session_start();
// INITIALIZE NEW VARS
$player1_id = $player2_id = $player3_id = $player4_id = "";
$currentres_id = $currentres_player1_sql = $currentres_player2_sql = $currentres_player3_sql = $currentres_player4_sql = "";
// CONNECT TO MYSQL
$conn = new mysqli("172.19.0.2", "root", "docker");
// TEST CONNECTION
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// SELECT DATABASE
mysqli_select_db($conn, 'db_memfirst');
// UPDATE DATABASE
if ($_SESSION['vflag'] == 0) {
  // RESERVATION
  mysqli_query($conn, $resname_sql);
  $currentres_id = mysqli_insert_id($conn);
  $numplayers_sql = $numplayers_sql . " WHERE res_id = " . $currentres_id;
  mysqli_query($conn, $numplayers_sql);
  // PLAYER 1
  mysqli_query($conn, $fname1_sql);
  $player1_id = mysqli_insert_id($conn);
  $currentres_player1_sql = "UPDATE Reservation SET player1_id = $player1_id WHERE res_id = $currentres_id";
  mysqli_query($conn, $currentres_player1_sql);
  $lname1_sql = $lname1_sql . " WHERE player_id = $player1_id";
  mysqli_query($conn, $lname1_sql);
  $email1_sql = $email1_sql . " WHERE player_id = $player1_id";
  mysqli_query($conn, $email1_sql);
  // PLAYER 2
  if ($fname2_sql != "") {
    mysqli_query($conn, $fname2_sql);
    $player2_id = mysqli_insert_id($conn);
    $currentres_player2_sql = "UPDATE Reservation SET player2_id = $player2_id WHERE res_id = $currentres_id";
    mysqli_query($conn, $currentres_player2_sql);
  }
  if ($lname2_sql != "") {
    $lname2_sql = $lname2_sql . " WHERE player_id = $player2_id";
    mysqli_query($conn, $lname2_sql);
  }
  if ($email2_sql != "") {
    $email2_sql = $email2_sql . "  WHERE player_id = $player2_id";
    mysqli_query($conn, $email2_sql);
  }
  //PLAYER 3
  if ($fname3_sql != "") {
    mysqli_query($conn, $fname3_sql);
    $player3_id = mysqli_insert_id($conn);
    $currentres_player3_sql = "UPDATE Reservation SET player3_id = $player3_id WHERE res_id = $currentres_id";
    mysqli_query($conn, $currentres_player3_sql);
  }
  if ($lname3_sql != "") {
    $lname3_sql = $lname3_sql . " WHERE player_id = $player3_id";
    mysqli_query($conn, $lname3_sql);
  }
  if ($email3_sql != "") {
    $email3_sql = $email3_sql . "  WHERE player_id = $player3_id";
    mysqli_query($conn, $email3_sql);
  }
  // PLAYER 4
  if ($fname4_sql != "") {
    mysqli_query($conn, $fname4_sql);
    $player4_id = mysqli_insert_id($conn);
    $currentres_player4_sql = "UPDATE Reservation SET player4_id = $player4_id WHERE res_id = $currentres_id";
    mysqli_query($conn, $currentres_player4_sql);
  }
  if ($lname4_sql != "") {
    $lname4_sql = $lname4_sql . " WHERE player_id = $player4_id";
    mysqli_query($conn, $lname4_sql);
  }
  if ($email4_sql != "") {
    $email4_sql = $email4_sql . "  WHERE player_id = $player4_id";
    mysqli_query($conn, $email4_sql);
  }
  // PASS VARS FOR CONF PAGE
  $_SESSION["currentres_id"] = $currentres_id;
  $_SESSION["player1_id"] = $player1_id;
  $_SESSION["player2_id"] = $player2_id;
  $_SESSION["player3_id"] = $player3_id;
  $_SESSION["player4_id"] = $player4_id;
  header("Location: confirmation.php"); // REDIRECT TO CONF PAGE
  exit();
  }
mysqli_close($conn);// CLOSE MYSQL CONNECTION
?>
