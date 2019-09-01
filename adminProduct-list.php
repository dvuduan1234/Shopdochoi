<?php 

require_once'ketnoi.php';

$sql = "SELECT * FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
	


			<div class="oneproduct">
				<a class="hinhproduct" href="Product_detail2.php?Productid=<?php echo $row["Productid"]?>">
					<div class="faded">
					
								<img src="<?php echo $row["Image"]?>" class="image">
								<div class="middle">
								    <div class="discountbox">
								    	<p>DISCOUNT <?php echo $row["Discount"]?> % </p>
								    	<p>ONLY 
								    		<?php
								    		$Price=$row["Price"];
								    		$Discount=$row["Discount"];
								    		echo $Price-($Price * $Discount /100);
								    		?>$
								    	</p>
								    </div>
					 			 </div>
					</div>
				</a>
					<div class="thongtinproduct">
						<span><?php echo $row["Productname"]?></span><br>
						<span class="explore" >EXPLORE NOW</span><br>
								<img src="cart-2.png" alt="hình giỏ hàng">
								<span><?php echo $row["Price"]?> $</span>


						<button onclick="document.getElementById('id03').style.display='block'" style="width:auto; color: white">Update</button>
							<button onclick="document.getElementById('id03').style.display='block'" style="width:auto; color: white">Delete</button>

							<div id="id03" class="modal">
							  <span onclick="document.getElementById('id03').style.display='none'"class="close" title="Close Modal">&times;</span>
							  <form class="modal-content" action="update.php?ProductId=<?php echo $row["Productid"]?>" method="POST">
							    <div class="container">
							     <label for="username"><b>Product Name</b></label>
							      <input type="text" placeholder="Enter Product Name" name="Productname" required>

							      <label for="psw"><b>Price</b></label>
							      <input type="text" placeholder="Enter Price" name="Price" required>

							      <label for="psw"><b>Image</b></label>
							      <input type="text" placeholder="Enter Image" name="Image" required>

							      <label for="psw"><b>Discount</b></label>
							      <input type="text" placeholder="Enter Discount" name="Discount" required>

							      <label for="psw"><b>Description</b></label>
							      <input type="text" placeholder="Enter Description" name="Description" required>

							      <div class="clearfix">
							        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
							        <button type="submit" class="cancelbtn">Update</button>
							      </div>
							    </div>
							  </form>
							</div>

							<script>
							// Get the modal
							var modal = document.getElementById('id03');

							// When the user clicks anywhere outside of the modal, close it
							window.onclick = function(event) {
							  if (event.target == modal) {
							    modal.style.display = "none";
							  }
							}
							</script>
					</div>

				

			</div>

<?php
	}
}
?>