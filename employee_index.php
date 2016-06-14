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
					echo "<tr typeid='".$result['ssn']."'><td>".$result['SSN']."</td>";
					echo "<td>".$result['FNAME']."</td>";
					echo "<td></td>";
					echo "<td>"; 
					echo $a->getEmployee($result['SUPER_SSN'])["FNAME"];
					echo "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
	</div>
</div>


<?php include ('includes/footer.php'); ?>