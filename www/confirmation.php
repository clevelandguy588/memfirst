<?php
session_start();
include "confirmationselect.php" ?>
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
  <h3>Success!</h3>
  <h4>Your tee time reservation succeeded at: <p class=data><?php echo $_SESSION["reg_date"]; ?></p></h5>
  <br>
</div>
<div id="ResDetails">
  <h3>Details:</h3>
  <table>
    <tr>
      <th><h4>Reservation Name: </h4></th>
      <th class ="data"><?php echo $_SESSION["resname_val"] ?></th>
    </tr>
    <tr>
      <th><h4>Number of Players: </h4></th>
      <th class="data"><?php echo $_SESSION["numplayers_val"] ?></th>
    </tr>
  </table>
  <br>
  <br>
</div>
<div id="Players">
<table id="Players">
<tr>
<th>
  <div id="Player1">
  <h3>Player #1</h3>
  <table>
    <tr>
      <th><h4>First Name: </h4></th>
      <th class="data"><?php echo $_SESSION["fname1_val"] ?></th>
    </tr>
    <tr>
      <th><h4>Last Name: </h4></th>
      <th class="data"><?php echo $_SESSION["lname1_val"] ?></th>
    </tr>
    <tr>
      <th><h4>Email Address: </h4></th>
      <th class="data"><?php echo $_SESSION["email1_val"] ?></th>
    </tr>
  </table>
  </div>
</th>
<?php
  // ONLY DISPLAY PLAYERS 2-4 CONTAINERS IF EXISTING
  if ($_SESSION["fname2_val"] != "") {
    echo '<th><div id="Player2"><h3>Player #2</h3>';
    echo '<table><tr><th><h4>First Name: </h4></th><th class="data">';
    echo $_SESSION["fname2_val"];
    echo '</th></tr><tr><th><h4>Last Name: </h4></th><th class="data">';
    echo $_SESSION["lname2_val"];
    echo '</th></tr><tr><th><h4>Email Address: </h4></th><th class="data">';
    echo $_SESSION["email2_val"];
    echo '</th></tr></table></div></th>';
      }
  if ($_SESSION["fname3_val"] != "") {
    echo '<th><div id="Player3"><h3>Player #3</h3>';
    echo '<table><tr><th><h4>First Name: </h4></th><th class="data">';
    echo $_SESSION["fname3_val"];
    echo '</th></tr><tr><th><h4>Last Name: </h4></th><th class="data">';
    echo $_SESSION["lname3_val"];
    echo '</th></tr><tr><th><h4>Email Address: </h4></th><th class="data">';
    echo $_SESSION["email3_val"];
    echo '</th></tr></table></div></th>';
  }
  if ($_SESSION["fname4_val"] != "") {
    echo '<th><div id="Player4"><h3>Player #4</h3>';
    echo '<table><tr><th><h4>First Name: </h4></th><th class="data">';
    echo $_SESSION["fname4_val"];
    echo '</th></tr><tr><th><h4>Last Name: </h4></th><th class="data">';
    echo $_SESSION["lname4_val"];
    echo '</th></tr><tr><th><h4>Email Address: </h4></th><th class="data">';
    echo $_SESSION["email4_val"];
    echo '</th></tr></table></div></th>';
  }
 ?>
</tr>
</table>
</div>
<br>
<br>
  <table class="links">
    <tr>
      <td><a href="index.php">New Reservation</a></td>
      <td>|</td>
      <td><a href="reservationtable.php">View Existing Reservations</a></td>
    </tr>
  </table>
</body>
<?php session_destroy(); ?>
</html>
