<?php 

require_once'ketnoi.php';

$sql = "SELECT * FROM catalogy";
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$row = $stmt->fetchAll();
    	?>
	

				<a href="catalogy-detail2.php?Catid=<?php echo $row["Catid"]?>">
					
				    	<span class="hvr-wobble-vertical" style="padding-right:20px"><?php echo $row["Catname"]?></span>
				    	

<?php
	}

?>