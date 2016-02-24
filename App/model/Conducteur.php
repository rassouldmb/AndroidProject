<?php
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 24/02/2016
 * Time: 09:16
 */

class Conducteur {
    private  $idConfucteur ;
    private $loginConducteur;
    private $pwdConducteur;
    private $nomConducteur;
    private $prenomConducteur;
    private $telConducteur;
    private $adresseConducteur;
    private $emailConducteur;
    private $estFumeur;
    private $note;

    /**
     * @return mixed
     */
    public function getLoginConducteur()
    {
        return $this->loginConducteur;
    }

    /**
     * @param mixed $loginConducteur
     */
    public function setLoginConducteur($loginConducteur)
    {
        $this->loginConducteur = $loginConducteur;
    }

    /**
     * @return mixed
     */
    public function getIdConfucteur()
    {
        return $this->idConfucteur;
    }

    /**
     * @param mixed $idConfucteur
     */
    public function setIdConfucteur($idConfucteur)
    {
        $this->idConfucteur = $idConfucteur;
    }

    /**
     * @return mixed
     */
    public function getPwdConducteur()
    {
        return $this->pwdConducteur;
    }

    /**
     * @param mixed $pwdConducteur
     */
    public function setPwdConducteur($pwdConducteur)
    {
        $this->pwdConducteur = $pwdConducteur;
    }

    /**
     * @return mixed
     */
    public function getNomConducteur()
    {
        return $this->nomConducteur;
    }

    /**
     * @param mixed $nomConducteur
     */
    public function setNomConducteur($nomConducteur)
    {
        $this->nomConducteur = $nomConducteur;
    }

    /**
     * @return mixed
     */
    public function getPrenomConducteur()
    {
        return $this->prenomConducteur;
    }

    /**
     * @param mixed $prenomConducteur
     */
    public function setPrenomConducteur($prenomConducteur)
    {
        $this->prenomConducteur = $prenomConducteur;
    }

    /**
     * @return mixed
     */
    public function getTelConducteur()
    {
        return $this->telConducteur;
    }

    /**
     * @param mixed $telConducteur
     */
    public function setTelConducteur($telConducteur)
    {
        $this->telConducteur = $telConducteur;
    }

    /**
     * @return mixed
     */
    public function getAdresseConducteur()
    {
        return $this->adresseConducteur;
    }

    /**
     * @param mixed $adresseConducteur
     */
    public function setAdresseConducteur($adresseConducteur)
    {
        $this->adresseConducteur = $adresseConducteur;
    }

    /**
     * @return mixed
     */
    public function getEmailConducteur()
    {
        return $this->emailConducteur;
    }

    /**
     * @param mixed $emailConducteur
     */
    public function setEmailConducteur($emailConducteur)
    {
        $this->emailConducteur = $emailConducteur;
    }

    /**
     * @return mixed
     */
    public function getEstFumeur()
    {
        return $this->estFumeur;
    }

    /**
     * @param mixed $estFumeur
     */
    public function setEstFumeur($estFumeur)
    {
        $this->estFumeur = $estFumeur;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }




}