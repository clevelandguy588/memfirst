<?php
session_start();
// INITIALIZE NEW VARS
$currentres_id =
$resresults_sql = $resresults = $resresults_val_arr = "";
$player1_results_sql = $player1_results = $player1 = $player1_results_val_arr = "";
$player2_results_sql = $player2_results = $player2 = $player2_results_val_arr = "";
$player3_results_sql = $player3_results = $player3 = $player3_results_val_arr = "";
$player4_results_sql = $player4_results = $player4 = $player4_results_val_arr = "";
  // CONNECT TO MYSQL
  $conn = new mysqli("172.19.0.2", "root", "docker");
  // TEST CONNECTION
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // SELECT DATABASE
  mysqli_select_db($conn, 'db_memfirst');
  // GET SAVED DATA FROM SESSION TO PULL FROM DATABASE
  $currentres_id = $_SESSION["currentres_id"];
  if ($currentres_id != "") {
    // REGISTRATION
    $resresults_sql = "SELECT res_name, num_players, reg_date FROM Reservation WHERE res_id = $currentres_id";
    $resresults = mysqli_query($conn, $resresults_sql);
    $resresults_val_arr = mysqli_fetch_row($resresults);
    $_SESSION["resname_val"] = $resresults_val_arr[0];
    $_SESSION["numplayers_val"] = $resresults_val_arr[1];
    $_SESSION["reg_date"] = $resresults_val_arr[2];
  }
    //PLAYER
    $player1_id = $_SESSION["player1_id"];
    if ($player1_id != "") {
    $player1_results_sql = "SELECT first_name, last_name, email FROM Player WHERE player_id = $player1_id";
    $player1_results = mysqli_query($conn, $player1_results_sql);
    $player1_results_val_arr = mysqli_fetch_row($player1_results);
    $_SESSION["fname1_val"] = $player1_results_val_arr[0];
    $_SESSION["lname1_val"] = $player1_results_val_arr[1];
    $_SESSION["email1_val"] = $player1_results_val_arr[2];
    }
    $player2_id = $_SESSION["player2_id"];
    if ($player2_id != "") {
    $player2_results_sql = "SELECT first_name, last_name, email FROM Player WHERE player_id = $player2_id";
    $player2_results = mysqli_query($conn, $player2_results_sql);
    $player2_results_val_arr = mysqli_fetch_row($player2_results);
    $_SESSION["fname2_val"] = $player2_results_val_arr[0];
    $_SESSION["lname2_val"] = $player2_results_val_arr[1];
    $_SESSION["email2_val"] = $player2_results_val_arr[2];
    }
    $player3_id = $_SESSION["player3_id"];
    if ($player3_id != "") {
    $player3_results_sql = "SELECT first_name, last_name, email FROM Player WHERE player_id = $player3_id";
    $player3_results = mysqli_query($conn, $player3_results_sql);
    $player3_results_val_arr = mysqli_fetch_row($player3_results);
    $_SESSION["fname3_val"] = $player3_results_val_arr[0];
    $_SESSION["lname3_val"] = $player3_results_val_arr[1];
    $_SESSION["email3_val"] = $player3_results_val_arr[2];
    }
    $player4_id = $_SESSION["player4_id"];
    if ($player4_id != "") {
    $player4_results_sql = "SELECT first_name, last_name, email FROM Player WHERE player_id = $player4_id";
    $player4_results = mysqli_query($conn, $player4_results_sql);
    $player4_results_val_arr = mysqli_fetch_row($player4_results);
    $_SESSION["fname4_val"] = $player4_results_val_arr[0];
    $_SESSION["lname4_val"] = $player4_results_val_arr[1];
    $_SESSION["email4_val"] = $player4_results_val_arr[2];
    }
mysqli_close($conn);// CLOSE MYSQL CONNECTION
?>
