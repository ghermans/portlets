<?php
require ($_SERVER["DOCUMENT_ROOT"] . '/include/database.inc');
if ($_GET['sendSigns'] == 'yes') {
		sleep(1);
	$id = $_GET['portlet_id'];
	$sign = $_GET['sign'];
	$q = " UPDATE `nb_portlets` SET `sign` = '$sign' WHERE `name` = '$id' ;";
	echo "$q";
	$res = $conn -> query($q);
	if ($res === TRUE)
		echo "Updated sign for $id";
}
if ($_GET['sendColumns'] == 'yes') {
	sleep(1);
	$c = count($_GET['left']);
	if ($c > 0) {
		for ($i = 0; $i < $c; $i++) {
			$q = "UPDATE `nb_portlets` SET `columnPosition` = 'left',  `columnRow` = $i WHERE `name` = '{$_GET['left'][$i]}';";
			$res = $conn -> query($q);
			if ($res === TRUE)
				echo "Updated column Position for {$_GET['left'][$i]} ";
		}
	}
	$c = count($_GET['middle']);
	if ($c > 0) {
		for ($i = 0; $i < $c; $i++) {
			$q = "UPDATE `nb_portlets` SET `columnPosition` = 'middle', `columnRow` = $i WHERE `name` = '{$_GET['middle'][$i]}';";
			$res = $conn -> query($q);
			if ($res === TRUE)
				echo "Updated column Position for {$_GET['middle'][$i]} ";
		}
	}
	$c = count($_GET['right']);
	if ($c > 0) {
		for ($i = 0; $i < $c; $i++) {
			$q = "UPDATE `nb_portlets` SET `columnPosition` = 'right', `columnRow` = $i WHERE `name` = '{$_GET['right'][$i]}';";	
			$res = $conn -> query($q);
			if ($res === TRUE)
				echo "Updated column Position for {$_GET['right'][$i]} ";
		}
	}
}
?>