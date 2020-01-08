<?php	

 

 function encuadrarFoto($foto_name,$foto_temp_name,$user_name,$lienzo){

	$user = $user_name;

	$path = rand(1000, 30000)."VT".$user['id_vendedor'];

	$foto_nombre = $foto_name;
	$temp_foto = $foto_temp_name;
    $medidas = getimagesize($temp_foto);
	$ancho = $medidas[0];
	$alto = $medidas[1];
	$relacion = $ancho/$alto;
	//cargamos el fondo
	$lienzo = $lienzo;
    $foto = imagecreatefromjpeg($temp_foto);

	if ($medidas[0] > $medidas[1]) {

		$foto_escalada = imagescale($foto,800,-1);
		$diferencia = (800 -(800/$relacion))/2;
		$alto_nuevo = 800-($diferencia*2);
		
		//pegamos la imagen sobre el fondo
	    imagecopy($lienzo,$foto_escalada,0,$diferencia,0,0,800,$alto_nuevo);

	}elseif ($medidas[0] < $medidas[1]) {
		
		$diferencia = (800-(800*$relacion))/2;
		$ancho_nuevo = 800-($diferencia)*2;
		$foto_escalada = imagescale($foto,$ancho_nuevo,800);
		//pegamos la imagen sobre el fondo
	    imagecopy($lienzo,$foto_escalada,$diferencia,0,0,0,$ancho_nuevo,800);
	}else{
		$diferencia = 0;
		$foto_escalada = imagescale($foto,800,800);
		imagecopy($lienzo,$foto_escalada,0,0,0,0,800,800);

	}


	return $lienzo;


}






