<?php
/**
 * [valores Obtiene los valores de la configuración de cada una de las paginas]
 * @param  [String] $solicitud [Nombre del valor solicitado]
 * @return [type]            [description]
 */
function String_Get_Valores($solicitud){

	if ($solicitud == "titulo") {
		return "Camelot Gimnasio Psicopedagogico";
	}else if ($solicitud == "copyright") {
		return "Developers Team  Todos los derechos reservados.";
	}else if ($solicitud == "version") {
		return "2.0";
	}else if ($solicitud == "año") {
		return "2018";
	}else if ($solicitud == "favicon") {
		return "logo.png";
	}else if ($solicitud == "server") {
		return "localhost";
	}else if ($solicitud == "username") {
		return "root";
	}else if ($solicitud == "password") {
		return "";
	}else if ($solicitud == "basededatos") {
		return "camelot_desarrollo";
	}else if ($solicitud == "color") { // color de todo el form
		return "#ECF0F1";
	}else if ($solicitud == "letracolor") {// color de el encabezado de las tablas
		return "#054C89";
	}else if ($solicitud == "colortitulo") {// color de los titulos de las tablas
		return "#054C89";
	}else if ($solicitud == "letratitulo") {// letra de el encabezado 
		return "#054C89";
	}
	// VALORES DE CONTACTO 
	else if ($solicitud == "telefono") {// color de el encabezado de las tablas
		return "+7 6454386 -  318 576 5751";
	}else if ($solicitud == "direccion") {// color de los titulos de las tablas
		return "Cl. 18 #24-35, Bucaramanga, Santander";
	}else if ($solicitud == "email") {// letra de el encabezado 
		return "contacto@colegiocamelot.edu.co";
	}
}
/**
 * [base_url Base de las paginas]
 * @return [String] [Base para las paginas]
 */

function url()
{
	return "Camelot/yeahkids/Admin/";
}
function base_url()
{
	//$pagina = "192.168.1.58";
	$pagina= "localhost";
	return "http://".$pagina.url();
}
function base_url_usuarios()
{
	//$pagina = "192.168.1.58";
	$pagina= "localhost/Camelot/yeahkids/";
	return "http://".$pagina."";
}	

/*   
----------------------------------------------------
--------INFORMACIÓN ESTANDARES----------------------
----------------------------------------------------

----------------------------------------------------
Estandar para el manejo de funciones y variables PHP
-------------------------><-------------------------
Funciones-->
El NOMBRE debe empezar por el tipo de dato que retorna,
seguido por el tipo de funcion y finalizando con un nombre
que descriptivo de la función de la misma.

Ejemplo : Array_Get_Elementos();

Variables-->
Las variables deben ser en minuscula, siempre muy descriptivas
además deben ser en singular o plurar dependiendo el caso de uso.

Ejemplo : $query;

----------------------------------------------------
Estandar para el manejo de la BASE DE DATOS
-------------------------><-------------------------

Tablas -->
El NOMBRE debe ser en plural, definiendo claramente el tipo de información 
que contendra, además debe empezar por tb en caso de ser una tabla maestra 
y tr en caso de ser una relación entre tablas.

Ejemplo : tb_usuarios ||  tr_usuariosxtorneo

Campos-->
Los campos dentro de la bd deben ser en singular, y la llave primaria de 
cada una de las tablas debe empezar por id_nombretabla.

Ejemplo : id_modulos --> PK de la tabla modulos 

-----------------------------------------------------
Estandar para el nombre de las paginas y archivos
-----------------------------------------------------

Archivos,carpetas y paginas PHP-->
Los archivos se guardaran en la respectiva carpeta padre de la respectiva 
pagina o archivo, los nombres de la misma seran escritos SIEMPRE en 
minuscula y en singular.

Ejemplo : php/administracion.php 

 */
?>
