<?php
// used to connect to the database
$host = "f2fbe0zvg9j8p9ng.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "vwadnxej7bnryorz";
$username = "rse65xjrvs8quadw";
$password = "ovfwk8go75f2rkbs";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
