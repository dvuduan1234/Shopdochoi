<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method = "post">
		id: <input type="text" name="id"><br/>
		Name: <input type="text" name="name"><br/>
		<input type="submit">
	</form>
	
</body>
</html>
<?php
	if(isset($_POST["id"]) && isset($_POST["name"])) {
		var $id = $_POST["id"];
		var $name = $_POST["name"];
// khởi tạo kết nối
	$db = parse_url(getenv("DATABASE_URL"));
	$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
		$data = [
	    'id' => $id,
	    'name' => $name,
	    
	];
	$sql = "INSERT INTO label (id, name) VALUES (:name, :surname)";
	$stmt= $pdo->prepare($sql);
	$stmt->execute($data);

}
?>

<!-- <table style="margin-bottom: 30px; margin-top: 30px;">
			 <tr>
  <td rowspan="6"><img src="<?= $image; ?>" alt="Chania" width="300" height="300" ></td>
    <td style="    padding-right: 20px;"><b>NAME:   </b></td>
    <td style="font-size: 20px"><?= $productname; ?></td>
    
  </tr>
  <tr>
    <td style="    padding-right: 20px;"><b>PRICE:   </b></td>
    <td style="font-size: 20px"><del><?= $price; ?> $ </del></td>
  </tr>

   <tr>
    <td style="    padding-right: 25px; color: red;"><b>DISCOUNT:   </b></td>
    <td style="font-size: 25px;color: red"><b><?= $discount; ?> % </b></td>
  </tr>


  <tr>
    <td style="    padding-right: 20px; color: red"><b>ONLY:   </b></td>
    <td style="font-size: 20px;color: red"><b><?php
				    		$price=$row["price"];
				    		$discount=$row["discount"];
				    		echo $price-($price * $discount /100);
				    		?>$</b></td>
  </tr>

  <tr>
    <td style="    padding-right: 20px;"><b>DESCRIPTION:</b></td>
    <td style="font-size: 20px"><?= $description; ?></td>
  </tr>

  <tr><td></td>
  	<td><br><button onclick="show()" style="width: 100px;color: white">BUY NOW</button></td>
                      </tr>
                    
                     
</table> -->