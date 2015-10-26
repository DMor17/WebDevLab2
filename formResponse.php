<html>
<body>


</body>
</html>

<?php
$db = new mysqli(
"br-cdbr-azure-south-a.cloudapp.net",
"bd7768bee1ccf1",
"b0434b31",
"dm1406997"
);

$Forename =$_POST["forename"];
$Surname = $_POST["surname"];
$Superpower=$_POST["superpower"];
$Date = $_POST["date"];
// test if connection was established, and print any errors
if($db->connect_errno) {
die('Connectfailed[' . $db->connect_error . ']');



}
$insert_query = "INSERT INTO superhero " . "($Forename, $Surname, $Superpower, $Date)";
?>