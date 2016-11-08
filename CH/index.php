<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="command.php" method="POST">
		<h3 name="Package">Package</h3>
			Width: 			<input type="text" name="width"><br>
			Heght: 			<input type="text" name="heght"><br>
			Massa: 			<input type="text" name="massa"><br>
			Price: 			<input type="text" name="price"><br>
			Departure date: <input type="text" name="departureDate"><br>
			Delivery time:	<input type="text" name="deliveryTime"><br>

		<h3 name="Sender">Sender</h3>
			First name: 	<input type="text" name="sfn"><br>
			Last name: 		<input type="text" name="sln"><br>
			Mail: 			<input type="text" name="smail"><br>
			Mobile: 		<input type="number" name="smob"><br>
			Continent: 		<input type="text" name="continentSender"><br>
			Index Postal: 	<input type="text" name="ips">	<br>	

		<h3 name="Receiver">Receiver</h3>
			First name: 	<input type="text" name="rfn"><br>
			Last name: 		<input type="text" name="rln"><br>
			Mail: 			<input type="text" name="rmail"><br>
			Mobile: 		<input type="number" name="rmob"><br>
			Continent: 		<input type="text" name="cReceiver"><br>	
			Index Postal: 	<input type="number" name="ipr"><br>		
		

		<button type="submit">button</button>
	</form>
	
</body>
</html>