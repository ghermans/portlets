<?php
class PrintPortlet
{
   function __construct($cn) {
global $conn;
		$q = "SELECT * FROM `nb_portlets` WHERE `columnPosition` = '$cn' ORDER BY `columnRow`;";
		$res = $conn->query($q);
		if(!$res===TRUE) { 
			die("Error Message: $mysqli->error <br> Error in: $q"); 
		}
		
		while ( $row = $res->fetch_assoc() ){
			$id = $row['name'];
			$sign = $row['sign'];
			$title = $row['title'];
			if ($sign == 'plus') {
				$hpc = " style='display: none;'";
			}
			else {
				$hpc = " style='display: block;'";
			}
			$classname = "ui-icon-".$sign."thick";
			echo "\n\n <div class='portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all' id='$id'>
				<div class='portlet-header ui-widget-header ui-corner-all'>
					$title<span class='ui-icon $classname'></span>
				</div>
				<div class='portlet-content' $hpc>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit
				</div>
			</div> \n\n ";
			}
   }
}

?>