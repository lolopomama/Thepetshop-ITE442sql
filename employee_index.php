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
		  <h1>Order <small>Add / Remove the order</small></h1>
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
				echo "<tr><th>Order</th><th>Customer</th><th>Staff</th><th>Order Date</th><th>Payment Method</th><th>Total Price</th></tr>";
				foreach ($employees as $result) {
				    
                    //echo "<tr typeid='".$result['ORDER_ID']."'><td><a href='employee_show.php?ssn=".$result['ORDER_ID']."'>".$result['SSN']."</a></td>";
					echo "<td>".$result['ORDER_ID']."</td>";
					echo "<td>".$result['CUS_ID']."</td>";
					echo "<td>".$result['STA_ID']."</d>";
					echo "<td>".$result['ODATE']."</td>";
                    echo "<td>".$result['PAYMENT_METHOD']."</td>";
					echo "<td>".$result['TOTAL_PRICE']."</td>";
				
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
	</div>
</div>


<?php include ('includes/footer.php'); ?>