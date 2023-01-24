<?php
require_once("autoloader.php");
// all request should come in the index Page to be 
// as a router to the app (front controller)

// $view= isset($_GET["view"])?$_GET["view"]:login;
// // $_GET["view"] = $view;
// print_r($_GET["view"]);
// require_once("views/$view");
$user= new login;
$user->constructor($_POST["userName"],$_POST["password"]);
$user->checkUser();
$uniqueVisitors = new counter ;

print_r($_SESSION["user"]);

print_r($_SESSION["visited"]);
$visit = new visit;
$visit->saveVisits();
$uniqueVisitors-> uniqueVisitsCounter();
print_r($_SESSION["visited"]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our website </title>
</head>
<body>
    <h1 align="center"> Welcome To Our Website home page</h1>
    <h2>Number of unique visitors : <?php echo $uniqueVisitors-> uniqueVisitsCounter(); ?> </h2>
</body>
</html>