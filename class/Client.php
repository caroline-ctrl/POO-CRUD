<?php

class Client
{
    private $id;
    private $nom;
    private $numClient;
    private $adresse;
    private $telephone;
    private $mail;

    /********************CONSTRUCT*************/

    public function __construct(array $attributClient)
    {
        $this->hydrat($attributClient);
    }


    public function hydrat(array $attributClient)
    {
        foreach ($attributClient as $key => $value) {
            $setter = "set" . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }


    /******************GETTER***************/

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
     * return $numClient
     * type : int
     */
    public function getNumClient()
    {
        return $this->numClient;
    }

    /**
     * return $adresse
     * type : string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * return $telephone
     * type : int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * return $mail
     * type : string
     */
    public function getMail()
    {
        return $this->mail;
    }


    /******************SETTER***************/

    /**
     * set value $id
     * type : int
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * set value $nom
     * type : string
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * set value $numClient
     * type : int
     */
    public function setNumClient(int $numClient)
    {
        $this->numClient = $numClient;
    }

    /**
     * set value $adresse
     * type : string
     */
    public function setadresse(string $adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * set value $telephone
     * type : int
     */
    public function setTelephone(int $telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * set value $mail
     * type : string
     */
    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }
}

$client = new Client(['id' => 456, "nom" => "kamel", "numClient" => 123, "adresse" => "12av", "telephone" => 0060606, "mail" => "lmdfk@lkjdf"]);


// $test = new Client(['id' => 1, "nom" => "kamel", "numClient" => 123, "adresse" => "12av", "telephone" => 0060606, "mail" => "lmdfk@lkjdf"]);
// var_dump($test);
