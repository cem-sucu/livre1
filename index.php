<?php 

// permet de charger les fichier classe que l'on crééé sans oublier de préciser le chemin du dossier
spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

//on instancie l'auteur
$auteur1 = new Auteur("King", "Stephen");

//on instancie les livres
$livre1 = new Livre(" Ca ", 1138, " 1986 ", 20, $auteur1);
$livre2 = new Livre(" Simetiere ", 374, " 1983 ",15, $auteur1);
$livre3 = new Livre("Le Fléau ", 823, " 1978 ", 16, $auteur1);
$livre4 = new Livre("Shining ", 447, " 1977 ", 16, $auteur1 );

// on ajoute les livre 
$auteur1->addBibliographie($livre1);
$auteur1->addBibliographie($livre2);
$auteur1->addBibliographie($livre3);
$auteur1->addBibliographie($livre4);

//on fait appoel a la methode afficher bibliographie 
echo $auteur1->afficherBibliographie();



?>