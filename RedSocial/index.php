<?php
	include "Webpage.php";
	class Index extends WebPAge{
		public function printBody() {
			//$name = returnNameFromMac();
			$text = "<h1 style='font-family:Arial;font-size:25px;background-color:Gray;'>Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manuel</h1>";
			$text = "<h2 style='font-family:Arial;font-size:25px;background-color:Gray;'>Apellido&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zegarra</h2>";
			$text= "<h3 style='font-family:Arial;font-size:25px;background-color:Gray;'>Edad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23</h3>";
			return $text;
		}
	}
	$index = new Index();
	$index->printPage();
?>
