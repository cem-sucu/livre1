<?php 

//TODO on cree la class Livre
class Livre {
    //TODO on cree les attributs
    private string $titre;
    private int $nbrePage;
    private DateTime $anneeParution;
    private float $prix;
    private Auteur $auteur;

    //TODO le constructor
    public function __construct(string $titre, int $nbrePage, string $anneeParution, float $prix, Auteur $auteur){
        $this->titre = $titre;
        $this->nbrePage = $nbrePage;
        $this->anneeParution = new DateTime($anneeParution);
        $this->prix = $prix;
        $this->auteur = $auteur;
    }

    //TODO les getter et setter
    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of nbrePage
     */ 
    public function getNbrePage()
    {
        return $this->nbrePage;
    }

    /**
     * Set the value of nbrePage
     *
     * @return  self
     */ 
    public function setNbrePage($nbrePage)
    {
        $this->nbrePage = $nbrePage;

        return $this;
    }

    /**
     * Get the value of anneeParution
     */ 
    public function getAnneeParution()
    {
        return $this->anneeParution;
    }

    /**
     * Set the value of anneeParution
     *
     * @return  self
     */ 
    public function setAnneeParution($anneeParution)
    {
        $this->anneeParution = $anneeParution;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    //TODO la méthode toString
    public function __toString()
    {
        return $this->getTitre() ."(".$this->getAnneeParution()->format("Y")." ): ".$this->getNbrePage() ." pages / ".$this->getPrix();
    }
}


?>