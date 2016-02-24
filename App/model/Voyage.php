<?php
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 24/02/2016
 * Time: 09:16
 */

class Voyage {
    private $idVoyage;
    private $villeDepart;
    private $villeArrivee;
    private $dateVoyage;
    private $prixVoyage;
    private $etatVoyage;
    private $idConducteur;
    private $idVoiture;

    /**
     * @return mixed
     */
    public function getIdVoyage()
    {
        return $this->idVoyage;
    }

    /**
     * @param mixed $idVoyage
     */
    public function setIdVoyage($idVoyage)
    {
        $this->idVoyage = $idVoyage;
    }

    /**
     * @return mixed
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * @param mixed $villeDepart
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;
    }

    /**
     * @return mixed
     */
    public function getVilleArrivee()
    {
        return $this->villeArrivee;
    }

    /**
     * @param mixed $villeArrivee
     */
    public function setVilleArrivee($villeArrivee)
    {
        $this->villeArrivee = $villeArrivee;
    }

    /**
     * @return mixed
     */
    public function getDateVoyage()
    {
        return $this->dateVoyage;
    }

    /**
     * @param mixed $dateVoyage
     */
    public function setDateVoyage($dateVoyage)
    {
        $this->dateVoyage = $dateVoyage;
    }

    /**
     * @return mixed
     */
    public function getPrixVoyage()
    {
        return $this->prixVoyage;
    }

    /**
     * @param mixed $prixVoyage
     */
    public function setPrixVoyage($prixVoyage)
    {
        $this->prixVoyage = $prixVoyage;
    }

    /**
     * @return mixed
     */
    public function getEtatVoyage()
    {
        return $this->etatVoyage;
    }

    /**
     * @param mixed $etatVoyage
     */
    public function setEtatVoyage($etatVoyage)
    {
        $this->etatVoyage = $etatVoyage;
    }

    /**
     * @return mixed
     */
    public function getIdConducteur()
    {
        return $this->idConducteur;
    }

    /**
     * @param mixed $idConducteur
     */
    public function setIdConducteur($idConducteur)
    {
        $this->idConducteur = $idConducteur;
    }

    /**
     * @return mixed
     */
    public function getIdVoiture()
    {
        return $this->idVoiture;
    }

    /**
     * @param mixed $idVoiture
     */
    public function setIdVoiture($idVoiture)
    {
        $this->idVoiture = $idVoiture;
    }



}