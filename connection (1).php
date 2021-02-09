<?php
$db_host = "sql205.epizy.com";               // Database Host
$db_user = "epiz_26669968";                    // Database User
$db_pass = "Y0BHkiVdA4eh";                        // Database Password
$db_name = "epiz_26669968_website_visitor_counter"; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); // Connect to Database

if(!$conn) // Check connection
{
  die("Connection failed: " . mysqli_connect_error()); // Display error if not connected
}
?>