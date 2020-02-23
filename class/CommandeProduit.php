<?php

include('Commande.php');
include('Produit.php');

class CommandeProduit
{
    private $id;
    private $fkCommandeId;
    private $fkProduitId;


    /********CONSTRUCT********/
    public function __construct(array $attributCommandeP)
    {
        $this->hydrate($attributCommandeP);
    }


    /*********HYDRATATION********/
    public function hydrate(array $attributCommandeP)
    {
        foreach ($attributCommandeP as $key => $value) {
            $setter = "set" . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }





    /*********GETTER*******/

    /**
     * return $id
     * type : int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * return $fkCommandeId
     * type : Commande
     */
    public function getFkCommandeId()
    {
        return $this->fkCommandeId;
    }

    /**
     * return $fkProduitId
     * type : Produit
     */
    public function getFkProduitId()
    {
        return $this->fkProduitId;
    }




    /*********SETTER*********/

    /**
     * set value $id
     * type : int
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * set value $fkCommandeId
     * type: Commande
     */
    public function setFkCommandeId(Commande $fkCommandeId)
    {
        $this->fkCommandeId = $fkCommandeId;
    }

    /**
     * set value $fkProduitId
     * type : Produit
     */
    public function setFkProduitId(Produit $fkProduitId)
    {
        $this->fkProduitId = $fkProduitId;
    }
}
