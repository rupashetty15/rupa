<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("in-cdbr-azure-central-b.cloudapp.net","b3142b0dbe341c","5f294cdd","acsm_9395a412ede4ea9");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>