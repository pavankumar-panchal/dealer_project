<?php
	$userid = imaxgetcookie('dealeruserid');
	$query = "SELECT * from imp_mas_implementationtype";
	$result = runmysqlquery($query);
	while($fetch = mysqli_fetch_array($result))
	{
		echo('<option value="'.$fetch['slno'].'">'.$fetch['imptype'].'</option>');
	}
?>
