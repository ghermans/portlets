<?php
function print_portlets($cn){
	require ($_SERVER["DOCUMENT_ROOT"] . '/include/database.inc');	
	$q = "SELECT * FROM `nb_portlets` WHERE `columnPosition` = '$cn' ORDER BY `columnRow`;";
	$res = $conn->query($q);
	if($mysqli->error) {
	    die("Error Message: $mysqli->error <br> Error in: $q");
	}
	
	while ( $row = $res->fetch_assoc() ){
		$id = $row['name'];
		$sign = $row['sign'];
		$title = $row['title'];
		if ($sign == 'plus') {
			$hpc = " style=\"display: none;\"";
		}	
		echo "<div class=\"portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all\" id=\"$id\">
			<div class=\"portlet-header ui-widget-header ui-corner-all\">
				$title<span class=\"ui-icon ui-icon-{$sign}thick\"></span>
			</div>
		
			<div class=\"portlet-content\"$hpc>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit
			</div>
		</div>";
		}
}
?>