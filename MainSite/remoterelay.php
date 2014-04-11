<form id="relay" action="eq_connected.php" method="GET">
    <input type="button" id="submitOn" style="border:1px solid #000; font-size:40px;" value="On" onClick="relayOn()"/>
    <input type="button" id="submitOff" style="border:1px solid #000; font-size:40px;" value="Off" onClick="relayOff()"/>
	<input type="hidden" name="total" id="total" value="">
</form>

<?php
	if ($row['eq_name'] == "LAMP" )
	{
	echo $row['eq_name'];
	exec("gpio -g mode 4 out");
	$state = $_GET["total"];

	if ($state == "on"){
		exec("gpio -g write 4 1");
	}
	if ($state == "off"){
		exec("gpio -g write 4 0");
	}
	}
	
	else {
	echo "other";
	exec("gpio -g mode 3 out");
	$state = $_GET["total"];

	if ($state == "on"){
		exec("gpio -g write 3 1");
	}
	if ($state == "off"){
		exec("gpio -g write 3 0");
	}
	
	}

?>