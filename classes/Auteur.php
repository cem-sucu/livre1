<?php

// TODO création de la classe Auteuyr
class Auteur {

    //TODO on créé les attributs
    private string $nom;
    private string $prenom;
    // on creer notre attribut array qui va contebnir toute les bibliographie
    private array $bibliographies;


    //TODO  on créée le __constructor
    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        // j'ajoute et initialise mon array vide
        $this->bibliographies = [];
    }

    

    //TODO on ajout les getter et setter de chaque attribut
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    //TODO on crée la _toString
    public function toString() {
        return " Livres de : ".$this->getPrenom() . " ".$this->getNom();
    }

    //TODO on ajoute les getter et setter pour biliographie
    /**
     * Get the value of bibliographies
     */ 
    public function getBibliographies()
    {
        return $this->bibliographies;
    }

    /**
     * Set the value of bibliographies
     *
     * @return  self
     */ 
    public function setBibliographies($bibliographies)
    {
        $this->bibliographies = $bibliographies;

        return $this;
    }

    // on crée la function ajout d'uun livre
    public function addBibliographie(Livre $livre){
        $this->bibliographies[] = $livre;
    }

    // et la fucntion pour afficher le livre
    public function afficherBibliographie(){
        $result = "<h2> Auteur $this</h2>";
        foreach($this->bibliographies as $bibliographies){
            $result .="<li> $bibliographies</li>";
        }
    }
}


?>