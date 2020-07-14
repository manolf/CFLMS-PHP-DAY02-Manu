
<?php


//PART 1: Opening a Database Connection
$servername = "localhost";
$username = "root";
$password = "";
//part3
$dbname = "my_test_database";
// Create connection
// $conn = mysqli_connect($servername, $username, $password);


// PART 4
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";



//PART 3 Create database
// $sql = "CREATE DATABASE $dbname";
// if  (mysqli_query($conn, $sql)) {
//    echo "Database $dbname created successfully! \n";
// } else {
//    echo "Error creating database $dbname: " . mysqli_error($conn);
// }


// PART 4: sql to create table
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

// PART 5: delete table
// $sql = "DROP TABLE Users";
// if (mysqli_query($conn, $sql)) {
//     echo "Table Users deleted successfully" . "\n";
// } else  {
//    echo "Error deleting table: " . mysqli_error($conn) . "\n" ;
// }

//PART 6: INSERT INTO 
// $sql = "INSERT INTO Users (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@doe.com')";
// if (mysqli_query($conn, $sql)) {
//     echo "New record created.\n";
// } else {
//    echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
// }


//PART 7: SELECTS
$sql = "SELECT user_id, lastname, firstname, email FROM Users";
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("ID=%s %s (%s) %s<br>",
                     $row[ "user_id"], $row["lastname"],$row["firstname"],$row["email"]);
}
echo  "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);

//PART 2 Closing Database Connection
mysqli_close($conn);


?>