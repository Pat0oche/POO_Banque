<?php

class Compte {
    private string $_libelle;
    private float $_soldeInitial;
    private string $_devise;
    private Titulaire $_titulaire;
    private float $_solde;

    public function __construct(string $libelle, float $soldeInitial, string $devise, Titulaire $titulaire){
        $this->_libelle = $libelle;
        $this->_soldeInitial = $soldeInitial;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_titulaire->ajouterCompte($this);
        $this->_solde = $soldeInitial;

    }

    /**
     * Get the value of _libelle
     */ 
    public function get_libelle()
    {
        return $this->_libelle;
    }

    /**
     * Set the value of _libelle
     *
     * @return  self
     */ 
    public function set_libelle($_libelle)
    {
        $this->_libelle = $_libelle;

        return $this;
    }

    /**
     * Get the value of _soldeInitial
     */ 
    public function get_soldeInitial()
    {
        return $this->_soldeInitial;
    }

    /**
     * Set the value of _soldeInitial
     *
     * @return  self
     */ 
    public function set_soldeInitial($_soldeInitial)
    {
        $this->_soldeInitial = $_soldeInitial;

        return $this;
    }

    /**
     * Get the value of _devise
     */ 
    public function get_devise()
    {
        return $this->_devise;
    }

    /**
     * Set the value of _devise
     *
     * @return  self
     */ 
    public function set_devise($_devise)
    {
        $this->_devise = $_devise;

        return $this;
    }

    /**
     * Get the value of _titulaire
     */ 
    public function get_titulaire()
    {
        return $this->_titulaire;
    }

    public function __toString()
    {
        return $this->_libelle." (".$this->_soldeInitial." ".$this->_devise." Titulaire : ".$this->_titulaire;
    }

    /**
     * Get the value of _solde
     */ 
    public function get_solde()
    {
        return $this->_solde;
    }

    /**
     * Set the value of _solde
     *
     * @return  self
     */ 
    public function crediter($montant)
    {
        $this->_solde += $montant;

        return $this;
    }

    public function debiter($montant) {
        $this->_solde += $montant;

        return $this;
    }

    public function virement(Titulaire $comptes, Titulaire $compteADebiter, Titulaire $compteACrediter, $montant) {
// compte cible et montant
        if(count($this->_titulaire->$comptes) >= 2) {
            $this->_titulaire->$compteADebiter -= $montant;
            $this->_titulaire->$compteACrediter += $montant;
            return $this;

        } else {
            return false;
        }
    }
}