<?php
// Configuration
$db_host = 'rds-database-endpoint-url';
$db_username = 'admin';
$db_password = 'password';
$db_name = 'webapp';

// Connect to RDS database
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// HTML form
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname"><br><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age"><br><br>
    <label for="city">City:</label>
    <input type="text" id="city" name="city"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    // Insert data into RDS database
    $sql = "INSERT INTO students (name, surname, age, city) VALUES ('$name', '$surname', '$age', '$city')";
    if (mysqli_query($conn, $sql)) {
        echo "Data stored successfully!";
    } else {
        echo "Error storing data: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
