<?php //UF
$url = "http://www.terra.cl/valores/";
$palabra = "UF :";
$x = 1; //evita tags <! (invisibles)

$fd = @fopen($url, "r"); //abre la url y comienza desde el principio para solo lectura. Apertura para s�lo lectura; ubica el apuntador de archivo al comienzo del mismo.
while ($line=@fgets($fd,1000)){
$pos = strpos ($line, $palabra);
if ($pos){
$glosa = " ";
$line2=fgets($fd,1000);
echo strip_tags($glosa.trim($line2));
}
}
@fclose ($fd);
?>