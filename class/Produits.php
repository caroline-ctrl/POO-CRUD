<?php

class Produit
{
    private $id;
    private $nom;
    private $description;
    private $quantity;
    private $isAvailable;
    private $prix;


    /*******CONSTRUCT*****/
    public function __construct(array $attributProduit)
    {
        $this->hydrat($attributProduit);
    }


    /*********HYDRAT******/
    public function hydrat(array $attributProduit)
    {
        foreach($attributProduit as $key => $value){
            $contenu = "set" . ucfirst($key);
            if(method_exists($this, $contenu)){
                $this->$contenu($value);
            }
        }
    }

    /******GETTER*******/

    /**
     * return $id
     * type : int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * return $nom
     * type : string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * return $description
     * type : string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * return $quantity
     * type : int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * return $isAvailable
     * type : boolean
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * return $prix
     * type : FLOAT
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**********SETTER*********/

    /**
     * set value $id
     * type: int
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * set value $nom
     * type: string
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * set value $description
     * type: string
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * set value $quantity
     * type: int
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * set value $isAvailable
     * type: boolean
     */
    public function setIsAvailable(bool $isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * set value $prix
     * type: float
     */
    public function setPrix(float $prix)
    {
        $this->prix = $prix;
    }
}

$test = new Produit(['id' => 1, "nom" => "chocolat", "description" => "dlmsjflsjf", "quantity" => 12, "isAvailable" => 1, "prix" => 1.2]);
var_dump($test);

