<?php

$emailinput = $_POST["emailid"];


if (filter_var($emailinput, FILTER_VALIDATE_EMAIL)) {
	echo $emailinput . " is een correct email";
}else{
	echo "deze email klopt niet";
}
?>
