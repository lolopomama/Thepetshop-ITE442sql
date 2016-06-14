<?php include ('includes/header.php'); ?>
<?php include ("includes/employee_connection.php"); ?>

<body background="panda.jpg">

<div class="container">
	<div class="row">
		<div class="page-header" style="margin: 0px;">
            <h1><b>Order Detail</b></h1>
		</div>
	</div>
	</br>
</div>

<center><?php 
	$a = new OrderConnection;
	$id = $_GET["oid"];

    
	$result = $a->getOrder($id);
	//print_r($result);
    echo "ID: " . $result['ORDER_ID']. "<BR/><BR/>";
    echo "Customer_id: " . $result['CUS_ID']. "<BR/><BR/>";
    echo "Staff_id: ". $result['STA_ID']. "<BR/><BR/>";
    echo "Order_date: " . $result['ODATE']. "<BR/><BR/>";
    echo "Payment_Method: " . $result['PAYMENT_METHOD']. "<BR/><BR/>";
    echo "Totoal_Price: " . $result['TOTAL_PRICE']. "<BR/><BR/>";
    ?></center>

</body>

<?php include ('includes/footer.php'); ?>

