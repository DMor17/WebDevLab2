<html>
<head></head>
<body>

<p>
    <a href="databaseQueries.php?query=2010"> Movies made before 2010 </a>
</p>

<p>
    <a href="databaseQueries.php?query=Marvel Studios"> Movies made by Marvel Studios </a>
</p>
</body>


</html>

<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 26/10/15
 * Time: 12:03
 */


$db = new mysqli(
"br-cdbr-azure-south-a.cloudapp.net",
"bd7768bee1ccf1",
"b0434b31",
"dm1406997"
);
// test if connection was established, and print any errors
if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');

}



//$sql_query = file_get_contents("marvelMovies.sql");
//$qr = $db->query($sql_query);
//$qr->close();
//$db->close();
