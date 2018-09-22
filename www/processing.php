<?php
include "mysql.php"; // CREATE / INITIALIZE DATABASE
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "validation.php"; // VALIDATE / PREPARE INPUT
    include "datainsert.php"; // UPDATE DATABASE / REDIRECT TO CONFIRMATION PAGE
  }
?>
