<?php
abstract class PageTemplate {
	abstract protected function printHeader();
	abstract protected function printBody();
	abstract protected function printColumn();
	abstract protected function printColumn2();
	abstract protected function printCuadro();
	abstract protected function printCuadro2();
	abstract protected function printCuadro3();
	abstract protected function printMarc();
	abstract protected function printMarc1();
	protected $title = 'PageTemplate';

	public function printPage() {
		$text = "<html>";
		$text .= $this->printHeader();

		$text .= "<body>";
				$text .= "<div id='main'>";
					$text .= $this->printBody();
				$text .= "</div>";
				$text .="<div id='columna'>";
                    $text .= $this->printColumn();
                $text .= "</div>";
                $text .="<div id='columna2'>";
                    $text .= $this->printColumn2();
                $text .= "</div>";
                $text .="<div id='cuadro'>";
                    $text .= $this->printCuadro();
                $text .= "</div>";
                $text .="<div id='cuadro2>";
                    $text .= $this->printCuadro2();
                $text .= "</div>";
                $text .="<div id='cuadro3'>";
                    $text .= $this->printCuadro3();
                $text .= "</div>";
                $text .="<div id='marco'>";
                    $text .= $this->printMarc();
                $text .= "</div>";
                $text .="<div id='marco1'>";
                    $text .= $this->printMarc1();
                $text .= "</div>";
		$text .= "</body>";
		$text .= "</html>";
		echo $text;
	}

}
?>
