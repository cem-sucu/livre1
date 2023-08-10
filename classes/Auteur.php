<?php

// TODO création de la classe Auteuyr
class Auteur {

    //TODO on créé les attributs
    private string $nom;
    private string $prenom;

    //TODO  on créée le __constructor
    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
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
        return $this->getPrenom() . " ".$this->getNom();
    }
}


?>