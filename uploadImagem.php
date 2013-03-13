<?php
	function upload($destino, $nome, $largura, $pasta){
		$img = imagecreatefromjpeg($destino);
		$x = imagesx($img);
		$y = imagesy($img);
		$altura = ($largura * $y) / $x;
		
		$novaImagem = imagecreatetruecolor($largura, $altura);
		imagecopyresampled($novaImagem, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);
		imagejpeg($novaImagem, "$pasta/$nome");
		
		imagedestroy($img);
		imagedestroy($novaImagem);
	}
?>
