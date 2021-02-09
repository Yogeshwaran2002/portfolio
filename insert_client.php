<?php
$con = mysqli_connect("sql205.epizy.com","epiz_26669968","Y0BHkiVdA4eh","epiz_26669968_social_network") or die("no connection");

if(isset($_POST['cli'])){
    require_once('connection.php'); // Database connection file
    require_once('function.php');  // PHP functions file

    $page_id = 1;
    $visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable

    add_view($conn, $visitor_ip, $page_id);

    $name = htmlentities(mysqli_real_escape_string($con,$_POST['cli_name']));
    $mail = htmlentities(mysqli_real_escape_string($con,$_POST['cli_mail']));
    $sub = htmlentities(mysqli_real_escape_string($con,$_POST['cli_sub']));
    $message = htmlentities(mysqli_real_escape_string($con,$_POST['cli_message']));
    $insert = "insert into contact_us (cli_name,cli_mail,cli_sub,cli_message) values('$name','$mail','$sub','$message')";
    $query= mysqli_query($con,$insert);
    if($query){
        echo"<script>alert('We will Contact You Soon')</script>";      
    }else{
        echo"<script>alert('Try Again')</script>";  
    }
    
}
?>