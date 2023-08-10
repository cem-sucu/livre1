<?php 

// permet de charger les fichier classe que l'on crééé sans oublier de préciser le chemin du dossier
spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});




?>