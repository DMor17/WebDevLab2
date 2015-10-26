<!DOCTYPE html>
<html>
<head>
</head>
<body>
// We append a key=value combination using ? This can be used with the GET Method in other pages for input
<p>
   <a href="helloPrinter.php?query=earth"> Hello Earth </a>
</p>
<p>
    <a href="helloPrinter.php?query=mars"> Hello Mars </a>
</p>
<p>
    <a href="helloPrinter.php?query=uranus"> Hello Uranus</a>
</p>


// creates a form and stores information, directing it to formResponse.php via the post method.

<form action="formResponse.php" method="post">
    Forename: <input type="text" id="forename"><br>
    Surname: <input type="text" id="surname"><br>
    Superpower: <input type="text" id="superpower"><br>
    DOB : <input type="date" name="date"><br>
    <input type="submit" value="Add superhero">
</form>


</body>
</html>
