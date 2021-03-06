<?php
session_start();
include('../../../php/principal.php');
include('../../../php/partidos.php');
include('../../../php/equipo.php');
include('../../../php/amonestaciones.php');

if(isset($_SESSION['perfil']))
{
	$resultado = '{"salida":true,';
	$bandera = $_POST['bandera'];

// Agrega un partido al sitio.
	if ($bandera === "nuevo") {
		$equipoa = $_POST['equipoa'];
		$equipob = $_POST['equipob'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		$lugar = $_POST['lugar'];
		$ronda = $_POST['ronda'];
		if (Boolean_Agregar_Partido($equipoa,$equipob,$fecha,$hora,$lugar,$ronda)) {
			$resultado.='"mensaje":true';
		} else {
			$resultado.='"mensaje":false';
		}
	}
	// Obtiene los datos de un partido.
	else if($bandera === "get_datos") {
		$id_partido = $_POST['id_partido'];
		$vector = Get_Partido($id_partido);
		if (!empty($vector)) {
			$resultado.='"mensaje":true,';
			$resultado.='"datos":'.json_encode($vector).'';
		} else {
			$resultado.='"mensaje":false';
		}
	}else if($bandera === "getcampeonato") {
		$campeonato = $_POST['campeonato'];
		$estado = $_POST['estado'];
		$vector = Array_Get_Partidos_Campeonato($estado,$campeonato);
		if (!empty($vector)) {
			$_SESSION['campeonato'] = $campeonato;
			$resultado.='"mensaje":true,';
			$resultado.='"datos":'.json_encode(Transforma_paritdo($vector)).'';
		} else {
			$resultado.='"mensaje":false';

		}
		// saber si ha sido o no definida la session del campeonato.
	}else if($bandera === "getcampeonato-diferente") {
		$campeonato = $_POST['campeonato'];
		$estado = $_POST['estado'];
		$vector = Array_Get_Partidos_Campeonato_Diferente($estado,$campeonato);
		if (!empty($vector)) {
			$_SESSION['campeonato'] = $campeonato;
			$resultado.='"mensaje":true,';
			$resultado.='"datos":'.json_encode(Transforma_paritdo($vector)).'';
		} else {
			$resultado.='"mensaje":false';

		}
		// saber si ha sido o no definida la session del campeonato.
	}else if($bandera === "get_campeonato") {
		if (isset($_SESSION['campeonato'])) {
			$campeonato =$_SESSION['campeonato'];
			$resultado.='"mensaje":true,';
			$resultado.='"datos":'.json_encode($campeonato).'';
		} else {
			$resultado.='"mensaje":false';
		}
	}
	else if($bandera === "getpartidosdobleestado") {
		$campeonato = $_POST['campeonato'];
		$estado = $_POST['estado'];
		$estado1 = $_POST['estado1'];
		$vector = Array_Get_Partidos_Campeonato_DobleEstado($estado,$estado1,$campeonato);
		if (!empty($vector)) {
			$_SESSION['campeonato'] = $campeonato;
			$resultado.='"mensaje":true,';
			$resultado.='"datos":'.json_encode(Transforma_paritdo($vector)).'';
		} 
		else 
		{
			$resultado.='"mensaje":false';

		}
	}
	else if ($bandera === "agregardetalles-amonestaciones")
	{
		$valor = $_POST['valor'];
		$json = "";
		if($valor == "true"){

		}else{
			$json = json_encode($_POST['json']); 
		}	
		
		$partido = $_POST['partido'];
		$fecha = $_POST['fecha'];
		$estado = $_POST['estado'];
		$tipo = $_POST['tipo'];
	

		if ($tipo == "editar") {
			Delete_detalles_amonestaciones_partidos($partido);
			Delete_partido_detalles_amonestaciones($partido);
			Reinicia_Detalles_Partido_amonestaciones($partido);
		}

		if($estado==='1')
		{
			$estadop ='7';
		}
		else if ($estado==='8' or $estado==='2')
		{
			$estadop ='2';

		}
		else if ($estado==='7')
		{
			$estadop ='7';

		}
		if($valor  == "true")
		{
			if(Set_resultado_Partido_Amonestaciones($partido,$estadop))
			{

	       $resultado.='"mensaje":true';
			}
			else
			{
				$resultado.='"mensaje":false';
	
			}
		}
		else
		{
			if (Set_resultado_Partido_Amonestaciones($partido,$estadop) 
			and Add_detalles_partido_Amonestados($json,$partido) 
			and  Add_detalles_amonestaciones_partido($partido,$json,$fecha)) 
		{
			$resultado.='"mensaje":true';
		}
		else
		{
			$resultado.='"mensaje":false';
		
		}

		}
	

	}
	else if($bandera == "get_datosamonestaciones")
	{

		$partido = $_POST['partido'];
		$vector = Array_Get_Detalles_Amonestacion($partido);
		if (!empty($vector)) 
		{
			$resultado.='"mensaje":true,';
			$resultado.='"datos":'.json_encode($vector).'';
		} 
		else {
			$resultado.='"mensaje":false';
		}
	}
	else if($bandera == "get_fechas")
	{
		$campeonato = $_POST['campeonato'];
		$vector = Array_Get_fechas_terminadas($campeonato);
		$_SESSION['campeonato'] = $campeonato;
		if (!empty($vector)) 
		{
			$resultado.='"mensaje":true,';
			$resultado.='"datos":'.json_encode($vector).'';
		} 
		else {
			$resultado.='"mensaje":false';
		}
	}else if($bandera == "agregardetalles-amonestaciones-gestion")
	{
		$json = json_encode($_POST['json']); 
		if (Set_Detalles_Amonestacion($json)) 
		{
			$resultado.='"mensaje":true';
		} 
		else {
			$resultado.='"mensaje":false';
		}
	}
}
else
{
	$resultado = '{"salida":false';
}
$resultado.='}';
echo ($resultado);

//---FUNCIONES--ESPECIFICAS--//
function Transforma_paritdo($array)
{
	$vector  = array();
	foreach ($array as $value) {

		$id_partido = $value['id_partido'];
		$equipo1    = $value['equipo1'];
		$nombre_equipo1 = Get_NombreEquipo($value['equipo1']);
		$equipo2    = $value['equipo2'];
		$nombre_equipo2 = Get_NombreEquipo($value['equipo2']);
		$estado     = $value['estado'];
		$nombre_estado = Get_NombreEstado_Partido($value['estado']);
		$fecha      = $value['fecha'];
		$hora       = $value['hora'];
		$lugar      = $value['lugar'];
		$nombre_lugar =    Get_NombreCancha($value['lugar']);
		$Nfecha     = $value['Nfecha'];
		$resultado1 = $value['resultado1'];
		$resultado2 = $value['resultado2'];

		$arreglo = array(
			"id_partido" => "$id_partido",
			"equipo1" => "$equipo1",
			"equipo2" => "$equipo2",
			"estado" => "$estado",
			"fecha" => "$fecha",
			"hora" => "$hora",
			"lugar" => "$lugar",
			"Nfecha" => "$Nfecha",
			"resultado1" => "$resultado1",
			"resultado2" => "$resultado2",
			"nombre_equipo1"=>"$nombre_equipo1",
			"nombre_equipo2"=>"$nombre_equipo2",
			"nombre_estado"=>"$nombre_estado",
			"nombre_lugar"=>"$nombre_lugar"
			);

		array_push($vector, $arreglo);
	}


	return $vector;
}


?>