<?php
/*Esta funcion es para imprimir values traidos desde el web service by ECR*/
function imprime_value_of_rest($url){
	$json = file_get_contents($url);
    $contenido = json_decode($json, true);

    for ($i=0; $i < count($contenido) ; $i++){
        //Cuerpo de lo que imprimo
        echo "<option value='".$contenido[$i]['id']."'>".$contenido[$i]['name']."</option>";
    }
}//FIN

?>
