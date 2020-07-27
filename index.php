<?php
$serverName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName ="test1";
$con = new mysqli($serverName,$dbUser,$dbPass,$dbName);
if($con->connect_error)
{
  die("details".$con->connect_error);
}

?>

<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>




<?php
$name = $_GET["name"];
$phone = $_GET["phone"];
$add="INSERT INTO users(name, phone) VALUES ('$name','$phone')";
$con->query($add);
?>

      <form class="m-5" method="get" action="index.php">
        <input type="text" placeholder="your namr" name="name">
        <input type="number" placeholder="your phone" name="phone">
        <input type="submit" value="add">
      </form>



    </body>
</html>