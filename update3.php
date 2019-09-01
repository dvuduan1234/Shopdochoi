
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

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["Productname"])) { $Productname = $_POST['Productname']; }
    if(isset($_POST["Price"])) { $Price = $_POST['Price']; }
    if(isset($_POST["Image"])) { $Image = $_POST['Image']; }
    if(isset($_POST["Discount"])) { $Discount = $_POST['Discount']; }
    if(isset($_POST["Description"])) { $Description = $_POST['Description']; }
$sql = "UPDATE product SET Productname='$Productname',Price='$Price', Image='$Image',Discount='$Discount',Description='$Description'
Where Productid= '$Productid'";
$result = $conn->query($sql);

if (mysqli_query($conn, $sql)) {
    echo "Update sucessfull";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    } 
}

?>


