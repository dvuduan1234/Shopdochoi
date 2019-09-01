
<?php
$hostname='localhost';
    $username = 'root';
    $password = '';
    $dbname = 'vindefrance';

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$user = "";
$pass = "";/**/

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["user"])) { $user = $_POST['user']; }
    if(isset($_POST["pass"])) { $pass = $_POST['pass']; }
$sql = "INSERT INTO account (user, pass)
VALUES ('$user', '$pass')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['user'] = $user;

        header("Location: http://localhost:8080/tenten/VindeFrance.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    } 
}

?>


