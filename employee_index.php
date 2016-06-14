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
					echo "<td>"."<a href='#'>".$result['ORDER_ID']."</a>"."<td>";
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