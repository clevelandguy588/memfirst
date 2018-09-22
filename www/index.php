<?php include "processing.php"; ?>
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
</div>
<div id="NewReservation">
  <h3>Create New Reservation</h3>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!-avoid exploits->
    <table>
      <tr>
        <th><h4>Reservation Name: </h4></th>
        <th><input type="text" name="resname" value="<?php echo $resname;?>"> <!-retain input value->
          <span class="error"> <?php echo $resnameErr;?></span></th> <!-validation message->
      </tr>
      <tr>
        <th><h4>Number of Players: </h4></th>
        <th>
          <select id="numplayers_id" name="numplayers" >
            <option value=""></option>
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>
          </select>
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
          <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>‌​
          <script type="text/javascript">
          // AJAX TO CONTROL PLAYER REGISTRATION FORM VISBILITY BASED ON numplayers MENU
          // HOW CAN I MAKE NOT HIDE IF THERE ARE VALIDATION ERRORS???
          $(function() {
            $('#Player1').hide();
            $('#Player2').hide();
            $('#Player3').hide();
            $('#Player4').hide();
            $('#numplayers_id').change(function(){
              if($('#numplayers_id').val() >= '1') {
                $('#Player1').show();
              } else {
                $('#Player1').hide();
              }
              if($('#numplayers_id').val() >= '2') {
              $('#Player2').show();
              } else {
                $('#Player2').hide();
              }
              if($('#numplayers_id').val() >= '3') {
              $('#Player3').show();
              } else {
                $('#Player3').hide();
              }
              if($('#numplayers_id').val() == '4') {
              $('#Player4').show();
              } else {
                $('#Player4').hide();
              }
            })
          });
          </script>
          <span class="error"> <?php echo $numplayersErr;?></span></th> <!-validation message->
      </tr>
    </table>
</div>
<div id="Players">
<table id="Players_Table" class="invis">
  <tr>
  <th>
    <div id="Player1">
    <h3>Player #1</h3>
    <table>
      <tr>
        <th><h4>First Name: </h4></th>
        <th><input type="text" name="fname1" value="<?php echo $fname1;?>"> <!-retain input value->
          <span class="error"> <?php echo $fnameErr1;?></span></th> <!-validation message->
      </tr>
      <tr>
        <th><h4>Last Name: </h4></th>
        <th><input type="text" name="lname1" value="<?php echo $lname1;?>"> <!-retain input value->
          <span class="error"> <?php echo $lnameErr1;?></span></th> <!-validation message->
      </tr>
      <tr>
        <th><h4>Email Address: </h4></th>
        <th><input type="text" name="email1" value="<?php echo $email1;?>"> <!-retain input value->
          <span class="error"> <?php echo $emailErr1;?></span></th> <!-validation message->
      </tr>
    </table>
    </div>
    </th>
    <th>
      <div id="Player2">
      <h3>Player #2</h3>
      <table>
        <tr>
          <th><h4>First Name</h4></th>
          <th><input type="text" name="fname2" value="<?php echo $fname2;?>"> <!-retain input value->
            <span class="error"> <?php echo $fnameErr2;?></span></th> <!-validation message->
        </tr>
        <tr>
          <th><h4>Last Name: </h4></th>
          <th><input type="text" name="lname2" value="<?php echo $lname2;?>"> <!-retain input value->
            <span class="error"> <?php echo $lnameErr2;?></span></th> <!-validation message->
        </tr>
        <tr>
          <th><h4>Email Address: </h4></th>
          <th><input type="text" name="email2" value="<?php echo $email2;?>"> <!-retain input value->
            <span class="error"> <?php echo $emailErr2;?></span></th> <!-validation message->
        </tr>
        </table>
      </div>
    </th>
    <th>
      <div id="Player3">
      <h3>Player #3</h3>
      <table>
        <tr>
          <th><h4>First Name</h4></th>
          <th><input type="text" name="fname3" value="<?php echo $fname3;?>"> <!-retain input value->
            <span class="error"> <?php echo $fnameErr3;?></span></th> <!-validation message->
        </tr>
        <tr>
        <th><h4>Last Name: </h4></th>
        <th><input type="text" name="lname3" value="<?php echo $lname3;?>"> <!-retain input value->
          <span class="error"> <?php echo $lnameErr3;?></span></th> <!-validation message->
        </tr>
        <tr>
        <th><h4>Email Address: </h4></th>
        <th><input type="text" name="email3" value="<?php echo $email3;?>"> <!-retain input value->
          <span class="error"> <?php echo $emailErr3;?></span></th> <!-validation message->
        </tr>
      </table>
      </div>
    </th>
    <th>
      <div id="Player4">
      <h3>Player #4</h3>
      <table>
        <tr>
          <th><h4>First Name</h4></th>
          <th><input type="text" name="fname4" value="<?php echo $fname4;?>"> <!-retain input value->
            <span class="error"> <?php echo $fnameErr4;?></span></th> <!-validation message->
        </tr>
        <tr>
        <th><h4>Last Name: </h4></th>
        <th><input type="text" name="lname4" value="<?php echo $lname4;?>"> <!-retain input value->
          <span class="error"> <?php echo $lnameErr4;?></span></th> <!-validation message->
        </tr>
        <tr>
        <th><h4>Email Address: </h4></th>
        <th><input type="text" name="email4" value="<?php echo $email4;?>"> <!-retain input value->
          <span class="error"> <?php echo $emailErr4;?></span></th> <!-validation message->
        </tr>
      </table>
      </div>
    </th>
  </tr>
</table>
</div>
  <input type="submit" name="submitButton" value="Register">
  </form>
  <br>
  <br>
  <table>
    <tr>
      <td><a href="reservationtable.php">View Existing Reservations</a></td>
    </tr>
  </table>
</body>
</html>
