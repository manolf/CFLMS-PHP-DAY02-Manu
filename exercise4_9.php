<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Database operations</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
        <form class="form-inline">
        <a class="btn btn-outline-success" href="http://localhost/codefactory/day2/index.html" role="button">Home</a>
        </form>
      </nav>


<p>not needed exercises are commented out </p>

<!-- 
<h2>Form for exercise 7</h2>
<form action="exercise4_9.php" method ="post">
   <p>
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
   <input type= "submit" value="Submit">
</form> -->

<?php

echo "<br><br>";
echo "<b>Exercise 4: create Database caruniverse </b>";
echo "<br>";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "caruniverse";
// $conn = mysqli_connect($servername, $username, $password);

// $sql = "CREATE DATABASE $dbname";
// if  (mysqli_query($conn, $sql)) {
//    echo "Database $dbname created successfully! \n";
// } else {
//    echo "Error creating database $dbname: " . mysqli_error($conn);
// }

//Closing Database Connection
//mysqli_close($conn);


echo "<br><br>";
echo "<b>Exercise 5: create a Table in the database </b>";
echo "<br>";

//Connection part start
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "caruniverse";

// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully<br>";
// //Connection part end


// $sql = "CREATE TABLE Users (
// user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(20) NOT NULL,
// lastname VARCHAR(20) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )" ;
// if (mysqli_query($conn, $sql)) {
//    echo "Table Users created successfully"  . "\n";
// } else {
//    echo  "Error creating table: " . mysqli_error($conn) . "\n";
// }
//Closing Database Connection
//mysqli_close($conn);


echo "<br><br>";
echo "<b>Exercise 6: Insert data into MySQL table with Statement </b>";
echo "<br>";

//Connection part start
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "caruniverse";

// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully<br>";
// //Connection part end


// $sql = "INSERT INTO Users (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@doe.com')";
// if (mysqli_query($conn, $sql)) {
//     echo "New record created.\n";
// } else {
//    echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
// }

//Closing Database Connection
//mysqli_close($conn);

echo "<br><br>";
echo "<b>Exercise 7: Insert data with form</b>";
echo "<br>";


//Connection part start
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "caruniverse";

// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error(). "\n");
// }
// echo "Connected successfully<br>";
// //Connection part end


// // Escape user inputs for security
// $first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
// $last_name = mysqli_real_escape_string($conn, $_POST[ 'lastname']);
// $email = mysqli_real_escape_string($conn, $_POST['email']);
// // attempt insert query execution
// //$sql = "INSERT INTO Users (firstname, lastname, email) VALUES ('John', 'Doe', 'john@doe.com')";

// $sql = "INSERT INTO Users (firstname, lastname, email) VALUES ('$first_name', '$last_name', '$email')";
// //$sql = "INSERT INTO Users (firstname, lastname, email) VALUES ($first_name, $last_name, $email)";
// if (mysqli_query($conn, $sql)) {
//     echo "<h1 class='text-success'>New record created.<h1>";
// } else {
//     echo "<h1>Record creation error for: </h1>" .
//          "<p>"  . $sql . "</p>" .
//          mysqli_error($conn);
// }

// //Closing Database Connection
// mysqli_close($conn);

echo "<br><br>";
echo "<b>Exercise 8: Display records</b>";
echo "<br>";

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

$sql = "SELECT user_id, lastname, firstname, email FROM Users";
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("ID=%s %s %s (%s)<br>",
                     $row[ "user_id"], $row["lastname"],$row["firstname"],$row["email"]);
}
echo  "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);

//Closing Database Connection
mysqli_close($conn);

echo "<br><br>";
echo "<b>Exercise 9: Update data with form</b>";
echo "<br>";






// PART 5: delete table
// $sql = "DROP TABLE Users";
// if (mysqli_query($conn, $sql)) {
//     echo "Table Users deleted successfully" . "\n";
// } else  {
//    echo "Error deleting table: " . mysqli_error($conn) . "\n" ;
// }




?>
    
</body>
</html>