<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Student Detail
	</title>
</head>
<body>
<?php
$stlist = array(
array(1, "nguyen van a"),
array(2," nguyen B")
);
if(isset($_GET['id']) && $_GET['id'] != ""){
	$id= $_GET['id'];

	// kiem tra id co nam trong khoang 1-3 khong?

	if($id>=1 && $id<=2){
	?>
	<h1> student detail</h1>
	<p> Id: <?=$stlist[$id-1][0]?></p>
	<p> name: <?=$stlist[$id-1][1]?></p>
	<?php
	}

else{
	echo "<h1> student not found</h1>";
}}

else{
	echo"<h1> id is not found</h1>";
}
?>
</body>
</html>