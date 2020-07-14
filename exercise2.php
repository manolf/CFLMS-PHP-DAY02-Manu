<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Form</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
        <form class="form-inline">
        <a class="btn btn-outline-success" href="http://localhost/codefactory/day2/index.html" role="button">Home</a>
        </form>
      </nav>

<form action="exercise2.php" method ="POST">
Surname: <input type="text"  name="surname" />
Name: <input type ="text" name="name" />
<input  type="submit" name="submit"  />
</form>

<?php
if( isset($_POST['submit']))
{
if( $_POST["surname" ] && $_POST["name"] )
{
echo "Welcome ". $_POST[ 'surname']. " " . $_POST[ 'name'] . "!";

}
}
?>
    
</body>
</html>