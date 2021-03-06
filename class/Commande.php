<?php

include('Client.php');
class Commande
{
    private $id;
    private $nom;
    private $date;
    private $isDelivred;
    private $fkClientId;


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
     * return $date
     * type : date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * return $isDelivred
     * type : boolean
     */
    public function getIsDelivred()
    {
        return $this->isDelivred;
    }

    /**
     * return $fk_clientId
     * type : Client
     */
    public function getFkClientId()
    {
        return $this->fkClientId;
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
     * set value $date
     * type: string
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * set value $isDelivred
     * type: boolean
     */
    public function setIsDelivred(bool $isDelivred)
    {
        $this->isDelivred = $isDelivred;
    }

    /**
     * set value $fk_ClientId
     * type: Client
     */
    public function setFkClientId(Client $fkClientId)
    {
        $this->fkClientId = $fkClientId->getId();
    }



    /*********SPECIFIC METHOD*********/

    // public function fkClientId(Client $clientId){
    //     var_dump($clientId->getId());
    // }
}

$commande = new Commande(['id' => 1, "nom" => "commande12", "date" => new DateTime(), "isDelivred" => 1, "fkClientId" => $client]);
// var_dump($commande);

