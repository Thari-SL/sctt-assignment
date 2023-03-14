<?php
// connect to the database
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "student_management";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

// check the connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// select data from the table
$sql = "SELECT * FROM student_data";
$result = mysqli_query($conn, $sql);

// display the data in a table
if(mysqli_num_rows($result) == 1){
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["stu_id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["address"] . "</td><td>" . $row["birth_date"] . "</td><td>" . $row["degree"] . "</td><td>" . $row["Gender"] . "</td></tr>";
    }
}else {
    echo "<tr><td colspan='5'>No data found</td></tr>";
}
echo("hello");
// close the database connection
mysqli_close($conn);
?>

