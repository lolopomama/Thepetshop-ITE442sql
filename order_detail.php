<?php include ('includes/header.php'); ?>
<?php include ("includes/employee_connection.php"); ?>
<?php 
	// Get all Employee
	$a = new OrderConnection;
	$employees =  $a->getOrders();
?>
<div class="container">
	<div class="row">
		<div class="page-header" style="margin: 0px;">
		  <h1>Order Detail</h1>
		</div>
	</div>
	</br>
</div>
<div class="container">
	<div class="row">
		<?php
		if (is_array($employees) || is_object($employees))
			{
				echo "<table class='table table-bordered'>";
				echo "<tr><th>Order</th><th>Service</th><th>Product</th><th>Quantity</th><th>Price</th></tr>";
				foreach ($employees as $result) {
					echo "<td>".$result['OID']."</a>"."</td>";
					echo "<td>".$result['CUS_ID']."</td>";
					echo "<td>".$result['STA_ID']."</td>";
                    echo "<td>".$result['ODATE']."</td>";
                    echo "<td>".$result['PAYMENT_METHOD']."</td>";
                    echo "<td>".$result['TOTAL_PRICE']."</td>";
					//echo "<td>"; 
					//echo $a->getEmployee($result['SUPER_SSN'])["FNAME"];
					//echo "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
	</div>
</div>


<?php include ('includes/footer.php'); ?>