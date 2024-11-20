<?php

function chargeClass($className){

    $filePath = str_replace("\\", "/", $className);


    $root = __DIR__ . "/" . $filePath . ".php";


    if (file_exists($root)) {
        require $root;
    } else {
        throw new Exception("La classe $className n'a pas été trouvée !");
    }
}
?>