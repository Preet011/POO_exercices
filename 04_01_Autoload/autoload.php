<?php

// $baseDir = __DIR__ . '/';

// spl_autoload_register(function ($class) use ($baseDir) {

//     $file = $baseDir . str_replace("\\", "/", $class). ".php";

//     if (file_exists($file)) {
//         require $file;
//     } else {
//         throw new Exception("La classe $className n'a pas été trouvée !");
//     }
// });


function chargeClass($className){

    $filePath = str_replace("\\", "/", $className);


    $root = __DIR__ . "/" . $filePath . ".php";


    if (file_exists($root)) {
        require $root;
    } else {
        throw new Exception("La classe $className n'a pas été trouvée !");
    }
}

// Enregistre la fonction chargeClass pour qu'elle soit appelée automatiquement pour charger les classes
spl_autoload_register("chargeClass");
?>