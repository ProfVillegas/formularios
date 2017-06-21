<?php
$opcion=(isset($_REQUEST['opcion'])?$_REQUEST['opcion']:0);

switch($opcion){
	case "pag1":{
	?>
	<div id="pag1"><h1><b>Descripción</b> </h1><b>El Motorola Moto G4 es la cuarta generación del exitoso Moto G, esta vez con grandes mejoras en sus características respecto a las generaciones anteriores. El Moto G4 cuenta con una pantalla 1080p de 5.5 pulgadas, procesador octa-core Snapdragon 617, 2GB de RAM, 16GB de almacenamiento interno expandible, cámara principal de 13 megapixels con flash LED, cámara frontal de 5 megapixels, protección contra el agua, y corre Android 6.0.1 Marshmallow.</b><br><a href="#inicio" class="inicio">regresar al inicio</a> 
</div>
		
	<?php	
	
		break;
	}
	case "pag2":{
		?>
	<div id="pag2"><h1>Características</h1><pre><b>General	
*Red
GSM 850 / 900 / 1800 / 1900 (SIM 1 & SIM 2 opcional) - HSDPA 850 / 900 / 1900 / 2100 
*Anunciado: 2013, Noviembre	
Status Disponible
*Tamaño	Dimensiones
129.9 x 65.9 x 11.6 mm 
*Peso
143 g
Display	Tipo
LCD TFT touchscreen capacitivo, 16M colores
*Tamaño
720 x 1280 pixels, 4.5 pulgadas
- Pantalla Gorilla Glass 3
- Soporte multitouch
- Sensor acelerómetro para auto rotación
- Sensor de proximidad para auto apagado
- Sensor de luz ambiente 
Ringtones	Tipo
Polifónico, MP3, WAV
*Customización
Descargas
*Vibración 
Si
- Conector de audio 3.5 mm
Memoria	Agenda telefónica
Entradas y campos prácticamente ilimitados, Foto de llamada
Registro de llamadas
Prácticamente ilimitado
Slot de tarjeta
No
- 8GB/16GB memoria interna, 1GB RAM
- Procesador Qualcomm Snapdragon 400 quad-core 1.2 GHz, GPU Adreno 305
Características	GPRS
Si
*OS
Android OS, v4.3 Jelly Bean (actualización a Android 4.4 KitKat asegurada)
*Mensajería
SMS, MMS, Email, Push Email, IM
*Navegador
HTML5
*Reloj
Si
*Alarma
Si
*Puerto infrarrojo
No
*Juegos
Si
*Colores
Negro, opciones de personalización en 7 colores y 14 combinaciones
*Cámara
5 MP, 2592х1944 pixels, autofocus, flash LED, geo-tagging, foco táctil,
 estabilizador de imagen, HDR, video 720p@30fps, cámara frontal 1.3 MP 
-SIM dual opcional
- GPS con soporte A-GPS, GLONASS
- Brújula digital
- EDGE Clase 12
- 3G HSDPA 21 Mbps/ HSUPA 5.76 Mbps
- Wi-Fi 802.11 b/g/n; banda dual, DLNA
- Bluetooth v4.0 A2DP
- microUSB 2.0
- Integración con redes sociales
- Cancelación activa de ruido con micrófono dedicado
- Salida TV via MHL
- Reproductor de video MP4/H.263/H.264 
- Reproductor de audio MP3/AAC+/WAV/eAAC+ 
- Radio FM
- Organizador
- 50GB de almacenamiento Google Drive
- Editor de imagen/video
- Integración Google Search, Maps, Gmail, YouTube, Calendar, Google Talk, Picasa
- Memo/comandos/discado de voz
- Manoslibres incorporado
- Ingreso predictivo de texto
*Batería
Standard, Li-Ion 2070 mAh
*Stand-by
Tiempo de conversación	Hasta 24 h</b></pre><br><a href="#inicio" class="inicio">regresar al inicio</a>
</div>	
		<?php
		break;
	}
	case "pag3":{
	?>
	<div id="pag3"><h1>Imagenes</h1><pre>Fotos de: MOTOROLA G4 <img src="imagenes/moto.jpg"><img src="imagenes/Moto-G4-Play-2.png" alt="motorola" width="50"><img src="imagenes/original.png"><img src="imagenes/MotoG4Plus_Logo_.png"><br></pre><a href="#inicio" class="inicio">regresar al inicio</a>
</div>
	<?php
		break;
	}
	case "pag4":{
	?>
	<div id="pag4"><h1>COMENTARIOS</h1>muy buen celular exelente magnifico<br><a href="#inicio" class="inicio">regresar al inicio</a> </div>
	<?php
		break;
	}
	default:{
		echo "<h5>Error</h5>"; break;	
	}
}
?>
