<?php

class Titulaire {
    private string $_nom;
    private string $_prenom;
    private DateTime $_date;
    private string $_ville;
    private array $_comptes;
    

    public function __construct(string $nom, string $prenom, string $date, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_date = new DateTime($date);
        $this->_ville = $ville;
        $this->_comptes = [];
        
    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _date
     */ 
    public function get_date()
    {
        return $this->_date;
    }

    /**
     * Set the value of _date
     *
     * @return  self
     */ 
    public function set_date($_date)
    {
        $this->_date = $_date;

        return $this;
    }

    /**
     * Get the value of _ville
     */ 
    public function get_ville()
    {
        return $this->_ville;
    }

    /**
     * Set the value of _ville
     *
     * @return  self
     */ 
    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }

    /**
     * Get the value of _comptes
     */ 
    public function get_comptes()
    {
        return $this->_comptes;
    }

    public function ajouterCompte(Compte $comptes){
        $this->_comptes[] = $comptes;
    }

    public function listerComptes() {
        $aff = "Informations de $this<br>";
        $aff .= "<ul>";
        foreach ($this->_comptes as $compte) {
            $aff .= "<li>$compte</li>";
        }
        $aff .= "</ul>";
        return $aff;
    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom." ".$this->_date->format("d / m /Y")." ".$this->_ville;
    }
}

