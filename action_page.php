<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<!-- <body>
	<h1>PHP</h1>
	<?php 
	echo"<h1> In ra noi dung text</h1>";
	$counter = 1;
	$message = "hello";
	echo "Value of counter".$counter;
	echo "<br> Value of message ". $message;
	echo "<br> thong tin ve bien counter ";
	var_dump($counter);
	echo "<br> thong tin ve bien message "; // var dum là xem thông tin về biến
	var_dump($message);
	// mảng 3 số nguyên
	$arr = array(1,2,3);
	//mảng 3 chuỗi
	$arr1 = array("mot","hai","ba");
	//truy cập phần tử mảng qua chỉ số
	echo"<br> phan tu thu 2 cua mang nguyen la: ".$arr[1];
		echo"<br> phan tu thu 2 cua mang chuoi la: ".$arr1[1];
// mảng kết hợp
		$aso_arr = array("key1" =>"phan tu mot ", "key2"=>"phan tu hai","key3"=>"phan tu ba");
		echo"<br>phan tu thu nhat la".$aso_arr["key1"];
		for($i=0; $i<count($arr);$i++)
		echo"<br>".arr[$i];
	function tinhtong($arr){
		$tong = 0;
		for ($i=0; $i<count($arr); $i++)
			$tong += $arr[$i];
		return $tong;
	}
	?>
<ul>
	<li><?php echo $arr[0];?></li>
	<li><?php echo $arr[1];?></li>
	<li><?php echo $arr[2];?></li>
</ul>
<h1> tong cua cac phan tu mang <?=tinhtong($arr)?></h1>
<ul>
	<li><?=$arr[0]?></li>
	<li><?=$arr[1]?></li>
	<li><?=$arr[2]?></li>
</ul>

<ul>
	<?php 
	for ($i=0; $i <count($arr) ; $i++) { 
		?>
		<li><?= $arr[$i]?></li>
		<?php
	}
	 ?>
</ul>

</body> -->
<body>
	<h1>Log in</h1>
	<form action="process.php" method="POST">
		User name: <input type="text" name="user"><br>
		Password: <input type="Password" name="pass"><br>
		<input type="submit" value="Log in">
		<input type="reset" value="Reset">
	</form>
</body>
</html>