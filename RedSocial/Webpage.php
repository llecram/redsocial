<?php
include "PageTemplate.php";

abstract class WebPage extends PageTemplate{
    public function Webpage($newtitle='RedoSocial'){
        $this->title=$newtitle;
    }
    public function printheader(){
        $text="<head>"."\n";
        $text.="<link rel=stylesheet href=Untitled4.css type=text/css >";
        $text.="<script type='text/javascript' src='jquery-3.3.1.min.js' >";
        $text.="<script type='text/javascript' src='Untitled3.js' >";
        $text.="<title>.$this->title.<\title>"."\n";
        $text.="</head>"."\n";
        return $text;
    }
    public function printColumn(){
        $text="<div>";
        $text.="<h4 style='font-family:chiller;font-size:25px;'>Intereses</h4>";
        $text.="<ul>";
            $text.="<li>Musica</li>";
            $text.="<li>Libros</li>";
            $text.="<li>Blogs</li>";
            $text.="<li>Eventos</li>";
            $text.="<li>Mangas</li>";
        $text.="</ul>";
        $text="</div>";
        return $text;
    }
    public function printColumn2(){
        $text="<div>";
        $text.="<h5 style='font-family:chiller;font-size:25px;'>Grupos</h5>";
        $text.="<ul>";
            $text.="<li>Matematica</li>";
            $text.="<li>Compra y Venta</li>";
            $text.="<li>Souls Saga</li>";
            $text.="<li>CComp</li>";
            $text.="<li>Tareas</li>";
        $text.="</ul>";
        $text="</div>";
        return $text;
    }
    public function printCuadro(){
        $text="<div id='busqueda' class='bloque' style='position:absolute; top:150px; left: 300px;width:800px;height:200px;'>";
        $text.="<h1 class='titulo'>Eventos a los que asistio</h1>";
        $text.="<ul>";
            $text.="<li>Concurso de bandas Punk vs bandas Funk</li>";
            $text.="<li>Marcha Bob Esponja para Presidente</li>";
            $text.="<li>Fun Space: Dia del Fan de Anime</li>";
            $text.="<li>Marcha por el bienestar de los Hermanos Grimm</li>";
        $text.="</ul>";
        $text="</div>";
        return $text;
    }
    public function printCuadro2(){
        $text="<div id='busqueda' class='bloque' style='position:absolute; top:400px; left: 300px;width:320px;height:200px;'>";
        $text.="<h1 class='titulo'>Lugares Visitados</h1>";
        $text.="<ul>";
            $text.="<li>Lima-Peru</li>";
            $text.="<li>Atacama-chile</li>";
            $text.="<li>Montevideo-Uruguay</li>";
            $text.="<li>Quito-Ecuador</li>";
        $text.="</ul>";
        $text="</div>";
        return $text;
    }
    public function printCuadro3(){
        $text="<div id='busqueda' class='bloque' style='position:absolute; top:400px; left: 780px;width:320px;height:200px;'>";
        $text.="<h1 class='titulo'>Aficiones</h1>";
        $text.="<ul>";
            $text.="<li>Guitarra</li>";
            $text.="<li>Leer</li>";
            $text.="<li>Dibujar</li>";
            $text.="<li>Gimnasio</li>";
        $text.="</ul>";
        $text="</div>";
        return $text;
    }
    public function printMarc(){
        $text="<div class='bloque'style='position:absolute; top:700px; left: 300px;width:600px;height:400px;'>";
        $text.="<h1 class='titulo'>Interaccion con Manuel</h1>";
        $text.="<fieldset>";
            $text.="<legend>Desea contactar a Manuel?</legend>";
            $text.="<button name='invitacion'>Enviar solicitud de Amistad</button>";
        $text.="</fieldset>";
        $text="<fieldset>";
            $text.="<legend>Solo enviarle un mensajillo?</legend>";
            $text.="<textarea cols = '50' rows='10' name='palabras'></textarea>";
            $text.="<button name='enviarPalabras'>Enviar</button>";
        $text="</fieldset>";
        return $text;
    }
}





?>
