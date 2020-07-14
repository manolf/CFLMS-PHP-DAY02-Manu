<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Function with parameters</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">

            <a class="btn btn-outline-success" href="http://localhost/codefactory/day2/index.html" role="button">Home</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day2/exercise4_9.php" role="button">Exercise4-9</a>
        </form>
    </nav>

    <?php
    //Connection part start
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "caruniverse";


    if (isset($_POST['submit'])) {
        if ($_POST["divident"] && $_POST["divisor"]) {

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() . "\n");
    }
    echo "Connected successfully<br>";

    //Connection part end

    //user_id from Exercise 8 where record has to be deleted
    $user_id = $_GET['id'];
    echo "userID: $user_id";


    // sql to delete a record from the Users table
    $sql = "DELETE FROM Users WHERE user_id = $user_id";

    if (mysqli_query($conn, $sql)) {
        echo "<h1 class='text-success' >User with ID = ($user_id) deleted.</h1>";
    } else {
        echo "<p>Record creation error for: </p>" . 
             "<p>"  . $sql . "</p>" . 
             mysqli_error($conn);
    }
    mysqli_close($conn);


    ?>

</body>

</html>