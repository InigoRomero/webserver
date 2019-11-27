<?php

$servername = "http://10.18.200.112/phpmyadmin/";
$username = "phpmyadmin";
$password = "42madrid";
$dbname = "cangopal";

$connection = new mysqli($servername, $username, $password, $dbname);


if ($connection->connect_error) {
die("Connection failed: " . $connection->connect_error);
}
$strTabla= "<table border='1' id='customers'><tr> <th>DATE</th><th>CARRIER </th><th>SERVICE</th><th>TRACKING_NR </th><th>IR_ORDER </th><th>CITY </th><th>POSTAL_CODE </th><th>COUNTRY </th></tr>";
$sql = "Select * from sample";
if ($connection->query($sql) === TRUE) {
	while(($row = mysql_fetch_assoc($sql))) {
		$items[$row['DATE']] = $row['DATE'];
		$items[$row['CARRIER']] = $row['CARRIER'];
		$items[$row['SERVICE']] = $row['SERVICE'];
		$items[$row['TRACKING_NR']] = $row['TRACKING_NR'];
		$items[$row['IR_ORDER']] = $row['IR_ORDER'];
		$items[$row['CITY']] = $row['CITY'];
		$items[$row['POSTAL_CODE']] = $row['POSTAL_CODE'];
		$items[$row['COUNTRY']] = $row['COUNTRY'];
	}
	while ($items)
	{
		$strTabla.= "<tr><td>". $items[$row['DATE']] ."</td>  <td>". $items[$row['CARRIER']] ."</td>  <td>". $items[$row['SERVICE']] ."</td> <td>". $items[$row['TRACKING_NR']] ."</td> <td>". $items[$row['IR_ORDER']] ."</td>  <td>". $items[$row['CITY']] ."</td>  <td>". $items[$row['POSTAL_CODE']] ."</td> <td>". $items[$row['COUNTRY']] ."</td>  </tr>";
	}
	$strTabla.= "</table>";
	return $strTabla;
	
} else {
	echo "hubo un error jeje";
}

$connection->close();

?>