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

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error(). "\n");
 }
 echo "Connected successfully<br>";
 //Connection part end

if (isset($_GET['id'])) {
$update = $_GET['id'];

$sql = "SELECT user_id, lastname, firstname, email FROM Users WHERE user_id = $update";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {

    $first_name = $row["firstname"];
    $last_name = $row["lastname"];
    $email = $row["email"];
    $user_id = $row["user_id"];
    printf ("$user_id $first_name $last_name $email");
 
    // printf("ID=%s %s %s (%s)<br>",
    // $row[ "user_id"], $row["lastname"],$row["firstname"],$row["email"]);


    //here the variables are inputted as values which can be changed
    //otherwise no output 
echo "<form action='update_user.php' method ='post'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";

echo "<label  for='user_id'>UserID</label>"; 
echo "<input type='text' name= 'user_id' id='user_id' value='$user_id'>";
   
echo "<label  for='firstName'>First Name:</label>"; 
echo "<input type='text' name= 'firstname' id='firstName' value='$first_name'>";

echo "<label for ='lastName'>Last Name:</label>";
echo "<input  type='text' name='lastname'  id='lastName' value='$last_name'>";

echo "<label for= 'emailAddress'>Email Address:</label>";
echo "<input  type='text' name= 'email' id='emailAddress' value='$email'>";


echo "<input type='submit' name='submit' />";

echo "</form>";
}
}

if (isset($_POST['submit'])) {

//Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST[ 'lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);


$sql2 = "UPDATE users SET firstname = '$first_name', lastname = '$last_name', email = '$email'
WHERE user_id = $user_id";

if (mysqli_query($conn, $sql2)) {
    echo "<h1 class='text-success'>record updated.<h1>";
} else {
    echo "<h1 class='text-danger'>Record creation error for: </h1>" .
         "<p>"  . $sql2 . "</p>" .
         mysqli_error($conn);
}


}




//Closing Database Connection
mysqli_close($conn);

// }


    ?>

</body>

</html>