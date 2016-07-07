<?php
function getMessage($status){
	if ($status==="good"){
		echo "Connection secure. Connecting you now..<br>";
		include "reRoute.php";
	}
	elseif ($status==="questionable"){
		echo "We will attempt to load the page in 15 seconds, but you will need to be on the '10.' (ten dot, excluding this 'sub-net') network in order to access the DENNY CRM database. ";
		echo "You will likely need to setup a VPN, please see Technical & Help section on ";
		echo "<a href='https://denny.ua.edu/quick-links/forms/'>the Forms page</a>.<br>";
		echo "<br>If nothing happens after the 15 seconds, please click this link: ";
		echo "<a href='https://denny-crm.ua.edu/bbappfx_prod/webui/webshellpage.aspx?databasename=BBInfinity; target='_blank'> DENNY CRM </a>.";
		include "reRouteAttempt.php";
	}
	elseif ($status==="bad"){
		echo "You will need to be on the '10.' (ten dot, excluding this 'sub-net') network in order to access the DENNY CRM database. ";
		echo "You will likely need to setup a VPN, please see Technical & Help section on ";
		echo "<a href='https://denny.ua.edu/quick-links/forms/'>the Forms page</a>.<br> ";
		echo "<br>If you would like to ignore this and attempt anyways, please click this link:";
		echo "<a href='https://denny-crm.ua.edu/bbappfx_prod/webui/webshellpage.aspx?databasename=BBInfinity' target='_blank'> DENNY CRM </a>.";
		echo "<br>If this issue persists, please contact itsd@ua.edu or call 205-348-5555";
	}
	else{ // test mode
		echo "test mode<br>";
	}
}
?>

<?php
	$number = $_SERVER[REMOTE_ADDR];
	echo "<br><h3>Your IP Address is " . $number. "</h3><br>";
	echo "<p>";
	switch (true) {
	////////////////////////////////////////////////////////////////////////////////////////////////
		case strpos($number,'::')!==false: //test mode in MAMP
			getMessage("test");
			break;
	//////////////////////////////////////////////////////////////////////////////////////////////////////
		case strpos($number,'10.112.')!==false:
			getMessage("good");
			break;	
		case strpos($number,'10.113.')!==false:
			getMessage("good");
			break;
		case strpos($number,'10.114.')!==false:
			getMessage("good");
			break;
		case strpos($number,'10.115.')!==false:
			getMessage("good");
			break;
		case strpos($number,'10.116.')!==false:
			getMessage("good");
			break;
		case strpos($number,'10.117.')!==false:
			getMessage("good");
			break;
		case strpos($number,'10.118.')!==false:
			getMessage("good");
			break;
		case strpos($number,'130.160.')!==false: // means certain failure when trying to connect
			getMessage("bad");
			break;
		case strpos($number,'10.121.')!==false: // means certain failure when trying to connect
			getMessage("bad");
			break;
		default: // their network isn't listed above. notifys user that it will ATTEMPT in 15 seconds
			getMessage("questionable");
			break;
		}
	echo "</p>";
?>