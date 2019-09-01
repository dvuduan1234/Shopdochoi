<?php 

require_once'ketnoi.php';

$sql = "SELECT * FROM catalogy";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row1 = $result->fetch_assoc()) {
    	?>
	

				<a href="catalogy-detail2.php?Catid=<?php echo $row1["Catid"]?>">
					
				    	<span class="hvr-wobble-vertical" style="padding-right:20px"><?php echo $row1["Catname"]?></span>
				    	

<?php
	}
}
?>