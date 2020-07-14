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


<h2>Update userdata</h2>
<form action="update_user.php" method ="post">
   
       <label  for="firstName">First Name:</label>
       <input type="text" name= "firstname" id="firstName">
   </p >
   <p>
       <label for ="lastName">Last Name:</label>
       <input  type="text" name="lastname"  id="lastName">
   </p>
   <p>
       <label for= "emailAddress">Email Address:</label>
       <input  type="text" name= "email" id="emailAddress">
   </p>
   <input type="submit" name="submit" />
</form>


    <?php
$user_id = $_GET['id'];
echo "userID: $user_id";
if (isset($_POST['submit'])) {
 

   // Connection part start
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
   echo "userID: $user_id";
   //Connection part end




// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST[ 'lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);


    
$sql = "UPDATE users SET firstname = '$first_name', lastname = '$last_name', email = '$email'
WHERE user_id = $user_id";
// $sql = "INSERT INTO Users (firstname, lastname, email) VALUES ('$first_name', '$last_name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "<h1 class='text-success'>record updated.<h1>";
} else {
    echo "<h1>Record creation error for: </h1>" .
         "<p>"  . $sql . "</p>" .
         mysqli_error($conn);
}

//Closing Database Connection
mysqli_close($conn);

}







    ?>

</body>

</html>