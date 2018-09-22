<?php
session_start();

// INITIALIZE VARS
$resnameErr = $numplayersErr = $fnameErr1 = $lnameErr1 = $emailErr1 = "";
$fnameErr2 = $lnameErr2 = $emailErr2 = "";
$fnameErr3 = $lnameErr3 = $emailErr3 = "";
$fnameErr4 = $lnameErr4 = $emailErr4 = "";
$resname = $numplayers = $fname1 = $lname1 = $email1 = "";
$fname2 = $lname2 = $email2 = "";
$fname3 = $lname3 = $email3 = "";
$fname4 = $lname4 = $email4 = "";
$resname_sql = $numplayers_sql = $fname1_sql = $lname1_sql = $email1_sql = "";
$fname2_sql = $lname2_sql = $email2_sql = "";
$fname3_sql = $lname3_sql = $email3_sql = "";
$fname4_sql = $lname4_sql = $email4_sql = "";
$data = "";
$vflag = 0;

  // Go through each field, validate input, and start building sql w/ good input
    if (empty($_POST["resname"])) {
      $resnameErr = "Reservation Name is required";
      $vflag += 1;
    } else {
      $resname = test_input($_POST["resname"]);
      // check for only letters and whitespace in reservation name
        if (!preg_match("/^[a-zA-Z ]*$/",$resname)) {
          $resnameErr = "Only letters and spaces allowed";
          $vflag += 1;
        } else {
          $resname_sql = "INSERT INTO Reservation (res_name) VALUES ('$resname')";
        }
    }
    if (empty($_POST["numplayers"])) {
      $numplayersErr = "Number of Players is required";
      $vflag += 1;
    } else {
      $numplayers = test_input($_POST["numplayers"]);
      // must be number 1-4
        if (!preg_match("/^[1-4]*$/",$numplayers)) {
          $numplayersErr = "Only numbers 1 to 4 allowed";
          $vflag += 1;
        } else {
          $numplayers_sql = "UPDATE Reservation SET num_players = $numplayers";
            }
          }

    if ($numplayers >= 1) {
      if (empty($_POST["fname1"]))  {
        $fnameErr1 = "First name is required";
        $vflag += 1;
      } else {
        $fname1 = test_input($_POST["fname1"]);
        // check for only letters in last name
          if (!preg_match("/^[a-zA-Z]*$/",$fname1)) {
            $fnameErr1 = "Only letters allowed";
            $vflag += 1;
          } else {
            $fname1_sql = "INSERT INTO Player (first_name) VALUES ('$fname1');";
              }
            }
          }
    if ($numplayers >= 1) {
      if (empty($_POST["lname1"]))  {
        $lnameErr1 = "Last name is required";
        $vflag += 1;
      } else {
        $lname1 = test_input($_POST["lname1"]);
        // check for only letters in last name
          if (!preg_match("/^[a-zA-Z]*$/",$lname1)) {
            $lnameErr1 = "Only letters allowed";
            $vflag += 1;
        } else {
          $lname1_sql = "UPDATE Player SET last_name = '$lname1'";
          }
        }
      }
    if ($numplayers >= 1) {
      if (empty($_POST["email1"]))  {
        $emailErr1 = "Email is required";
        $vflag += 1;
      } else {
      $email1 = test_input($_POST["email1"]);
      // check if e-mail address is well-formed
        if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
          $emailErr1 = "Invalid email format";
          $vflag += 1;
        } else {
          $email1_sql = "UPDATE Player SET email = '$email1'";
          }
      }
    }

    if ($numplayers >= 2) {
      if (empty($_POST["fname2"]))  {
        $fnameErr2 = "First name is required";
        $vflag += 1;
      } else {
        $fname2 = test_input($_POST["fname2"]);
        // check for only letters in last name
          if (!preg_match("/^[a-zA-Z]*$/",$fname2)) {
            $fnameErr2 = "Only letters allowed";
            $vflag += 1;
        } else {
          $fname2_sql = "INSERT INTO Player (first_name) VALUES ('$fname2')";
      }
    }
  }
    if ($numplayers >= 2) {
      if (empty($_POST["lname2"]))  {
        $lnameErr2 = "Last name is required";
        $vflag += 1;
      } else {
        $lname2 = test_input($_POST["lname2"]);
        // check for only letters in last name
          if (!preg_match("/^[a-zA-Z]*$/",$lname2)) {
            $lnameErr2 = "Only letters allowed";
            $vflag += 1;
        } else {
          $lname2_sql = "UPDATE Player SET last_name = '$lname2'";
          }
      }
    }
    if ($numplayers >= 2) {
      if (empty($_POST["email2"]))  {
        $emailErr2 = "Email is required";
        $vflag += 1;
      } else {
      $email2 = test_input($_POST["email2"]);
      // check if e-mail address is well-formed
        if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
          $emailErr2 = "Invalid email format";
          $vflag += 1;
        } else {
          $email2_sql = "UPDATE Player SET email = '$email2'";
          }
      }
    }
    if ($numplayers >= 3) {
      if (empty($_POST["fname3"]))  {
        $fnameErr3 = "First name is required";
        $vflag += 1;
      } else {
        $fname3 = test_input($_POST["fname3"]);
        // check for only letters in last name
          if (!preg_match("/^[a-zA-Z]*$/",$fname3)) {
            $fnameErr3 = "Only letters allowed";
            $vflag += 1;
        } else {
          $fname3_sql = "INSERT INTO Player (first_name) VALUES ('$fname3')";
      }
      }
    }
    if ($numplayers >= 3) {
      if (empty($_POST["lname3"]))  {
        $lnameErr3 = "Last name is required";
        $vflag += 1;
      } else {
        $lname3 = test_input($_POST["lname3"]);
        // check for only letters in last name
          if (!preg_match("/^[a-zA-Z]*$/",$lname3)) {
            $lnameErr3 = "Only letters allowed";
            $vflag += 1;
        } else {
          $lname3_sql = "UPDATE Player SET last_name = '$lname3'";
          }
      }
    }
    if ($numplayers >= 3) {
    if (empty($_POST["email3"]))  {
      $emailErr3 = "Email is required";
      $vflag += 1;
    } else {
    $email3 = test_input($_POST["email3"]);
    // check if e-mail address is well-formed
      if (!filter_var($email3, FILTER_VALIDATE_EMAIL)) {
        $emailErr3 = "Invalid email format";
        $vflag += 1;
      } else {
        $email3_sql = "UPDATE Player SET email = '$email3'";
        }
    }
  }
    if ($numplayers == 4) {
      if (empty($_POST["fname4"]))  {
        $fnameErr4 = "First name is required";
        $vflag += 1;
      } else {
        $fname4 = test_input($_POST["fname4"]);
        // check for only letters in last name
          if (!preg_match("/^[a-zA-Z]*$/",$fname4)) {
            $fnameErr4 = "Only letters allowed";
            $vflag += 1;
        } else {
          $fname4_sql = "INSERT INTO Player (first_name) VALUES ('$fname4')";
      }
      }
    }
    if ($numplayers == 4) {
      if (empty($_POST["lname4"]))  {
        $lnameErr4 = "Last name is required";
        $vflag += 1;
      } else {
        $lname4 = test_input($_POST["lname4"]);
        // check for only letters in last name
          if (!preg_match("/^[a-zA-Z]*$/",$lname4)) {
            $lnameErr4 = "Only letters allowed";
            $vflag += 1;
        } else {
          $lname4_sql = "UPDATE Player SET last_name = '$lname4'";
          }
      }
    }
    if ($numplayers == 4) {
      if (empty($_POST["email4"]))  {
        $emailErr4 = "Email is required";
        $vflag += 1;
      } else {
      $email4 = test_input($_POST["email4"]);
      // check if e-mail address is well-formed
        if (!filter_var($email4, FILTER_VALIDATE_EMAIL)) {
          $emailErr4 = "Invalid email format";
          $vflag += 1;
        } else {
          $email4_sql = "UPDATE Player SET email = '$email4'";
          }
      }
    }
    // PASS SESSION VARS
    $_SESSION['vflag'] = $vflag;
    // SANITIZE DATA
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = filter_var($data, FILTER_SANITIZE_STRING);
    return $data;
  }
?>
