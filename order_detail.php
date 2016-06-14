<?php include ('includes/header.php'); ?>
<?php include ("includes/employee_connection.php"); ?>
<?php 
	$a = new OrderConnection;
	$id = $_GET["oid"];

	$result = $a->getOrder($id);
	//print_r($result);
    echo "ID: " . $result['ORDER_ID']. "<BR/>";
    echo "Customer_id: " . $result['CUS_ID']. "<BR/>";
    echo "Staff_id: ". $result['STA_ID']. "<BR/>";
    echo "Order_date: " . $result['ODATE']. "<Br/>";
    echo "Payment_Method: " . $result['PAYMENT_METHOD']. "<Br/>";
    echo "Totoal_Price: " . $result['TOTAL_PRICE']. "<Br/>";
?>

<?php include ('includes/footer.php'); ?>

