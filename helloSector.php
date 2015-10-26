<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    // We append a key=value combination using ? This can be used with the GET Method in other pages for input
   <a href="helloPrinter.php?query=earth"> Hello Earth </a>
</p>
<p>
    <a href="helloPrinter.php?query=mars"> Hello Mars </a>
</p>
<p>
    <a href="helloPrinter.php?query=uranus"> Hello Uranus</a>
</p>


// Creates a form and stores information, directing it to formResponse.php via the post method.
<form action="formResponse.php" method="post">
    <label>Forename</label><input type=“text” name=“forename”>
    <label>Surname</label><input type=“text” name=“surname”>
    <input type="submit" value="Submit">
</form>
</body>
</html>
