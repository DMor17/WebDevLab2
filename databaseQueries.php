<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 26/10/15
 * Time: 12:29
 */

$db = new mysqli(
    "br-cdbr-azure-south-a.cloudapp.net",
    "bd7768bee1ccf1",
    "b0434b31",
    "dm1406997"
);
// test if connection was established, and print any errors
if($db->connect_errno) {
    die('Connectfailed[' . $db->connect_error . ']');

}


//    $sql = "SELECT * FROM marvelMovies WHERE productionStudio LIKE '%Columbia Pictures%'";

    //$result = $db->query($sql);
    //echo 'test';
    //while($row = $result->fetch_array()){
    //echo "<p>" . $row['title']. "</p>";
  //  }

$query = $_GET["query"];

if ($query = '2010') {
    $sql = "SELECT * FROM marvelMovies WHERE yearReleased < 2010";
    $result = $db->query($sql);
    while ($row = $result->fetch_array()) {
        echo "<p>" . $row['title'] . "</p>";

    }
}

if ($query = 'Marvel Studios') {
    $sql = "SELECT * FROM marvelMovies WHERE productionStudios LIKE 'Marvel Studios'";
    $result = $db->query($sql);
    while ($row = $result->fetch_array()) {
        echo "<p>" . $row['title'] . "</p>";

    }
}

    $result->close();
    $db->close();
