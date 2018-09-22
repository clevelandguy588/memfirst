<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<div id="Header">
  <h1>MembersFirst Country Club</h1>
  <h2>Tee Time Reservations</h2>
  <br>
  <h3>Existing Reservations</h3>
</div>
<form>
<?php
  // CREATE CONNECTION
  $conn = new mysqli("172.19.0.2", "root", "docker");
  // CHECK CONNECTION
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // SELECT DATABASE
    mysqli_select_db($conn, 'db_memfirst');
  // GET DATA / BUILD HTML TABLE STRUCTURE
    $query = "SELECT * FROM Reservation ORDER by res_id DESC";
    $res = mysqli_query($conn, $query);
    echo "<table class='table_data'>";
    echo "<tr><td><h3>Reservation Name</h3></td><td><h3>Number of Players</h3></td><td><h3>Player 1</h3></td><td><h3>Player 2</h3></td><td><h3>Player 3</h3></td><td><h3>Player 4</h3></td></tr>";
    $player1_name = $player2_name = $player3_name = $player4_name = "";
    while($row = mysqli_fetch_array($res)){
      $currentplayer1_id = $row['player1_id'];
      $currentplayer2_id = $row['player2_id'];
      $currentplayer3_id = $row['player3_id'];
      $currentplayer4_id = $row['player4_id'];
      if ($currentplayer1_id != "") {
        $query2 = "SELECT first_name, last_name FROM Player JOIN Reservation ON $currentplayer1_id = Player.player_id";
        $res2 = mysqli_query($conn, $query2);
      }
        while($row2 = mysqli_fetch_array($res2)) {
          $player1_name = $row2['first_name'] . " " . $row2['last_name'];
        }
      if ($currentplayer2_id != "") {
        $query3 = "SELECT first_name, last_name FROM Player JOIN Reservation ON $currentplayer2_id = Player.player_id";
        $res3 = mysqli_query($conn, $query3);
        while($row3 = mysqli_fetch_array($res3)) {
          $player2_name = $row3['first_name'] . " " . $row3['last_name'];
        }
      }
      if ($currentplayer3_id != "") {
        $query4 = "SELECT first_name, last_name FROM Player JOIN Reservation ON $currentplayer3_id = Player.player_id";
        $res4 = mysqli_query($conn, $query4);
        while($row4 = mysqli_fetch_array($res4)) {
          $player3_name = $row4['first_name'] . " " . $row4['last_name'];
        }
      }
      if ($currentplayer4_id != "") {
        $query5 = "SELECT first_name, last_name FROM Player JOIN Reservation ON $currentplayer4_id = Player.player_id";
        $res5 = mysqli_query($conn, $query5);
        while($row5 = mysqli_fetch_array($res5)) {
          $player4_name = $row5['first_name'] . " " . $row5['last_name'];
        }
      }
    echo "<tr><td>" . $row['res_name'] . "</td><td>" . $row['num_players'] . "</td><td>" . $player1_name . "</td><td>" . $player2_name . "</td><td>" . $player3_name . "</td><td>" . $player4_name . "</td></tr>";
    $player1_name = $player2_name = $player3_name = $player4_name = "";
    }
    echo "</table>";
    mysqli_close($conn);// CLOSE MYSQL CONNECTION
  ?>
</form>
<br>
<br>
  <table>
    <tr>
      <td><a href="index.php">New Reservation</a></td>
    </tr>
  </table>
</body>
</html>
