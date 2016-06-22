<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="produit")
 */
class Produit 
{



	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_prod;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $dat_crea_prod;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $dat_modif_prod;

	/**
     * @ORM\Column(type="integer")
     */
	protected $sta_prod;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $nom_prod;

	/**
     * @ORM\Column( type="string", length=255)
     */
	protected $ref_prod;

	/**
     * @ORM\Column( type="string", length=255)
     */
	protected $key_prod;


    /**
    * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User")
    * @ORM\JoinColumn(nullable=false)
    */
    protected $cli_id;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Type")
    * @ORM\JoinColumn(nullable=false)
    */
    protected $typ_id;









    /**
     * Gets the value of id_prod.
     *
     * @return mixed
     */
    public function getIdProd()
    {
        return $this->id_prod;
    }

    /**
     * Sets the value of id_prod.
     *
     * @param mixed $id_prod the id prod
     *
     * @return self
     */
    protected function setIdProd($id_prod)
    {
        $this->id_prod = $id_prod;

        return $this;
    }

    /**
     * Gets the value of dat_crea_prod.
     *
     * @return mixed
     */
    public function getDatCreaProd()
    {
        return $this->dat_crea_prod;
    }

    /**
     * Sets the value of dat_crea_prod.
     *
     * @param mixed $dat_crea_prod the dat crea prod
     *
     * @return self
     */
    protected function setDatCreaProd($dat_crea_prod)
    {
        $this->dat_crea_prod = $dat_crea_prod;

        return $this;
    }

    /**
     * Gets the value of dat_modif_prod.
     *
     * @return mixed
     */
    public function getDatModifProd()
    {
        return $this->dat_modif_prod;
    }

    /**
     * Sets the value of dat_modif_prod.
     *
     * @param mixed $dat_modif_prod the dat modif prod
     *
     * @return self
     */
    protected function setDatModifProd($dat_modif_prod)
    {
        $this->dat_modif_prod = $dat_modif_prod;

        return $this;
    }

    /**
     * Gets the value of sta_prod.
     *
     * @return mixed
     */
    public function getStaProd()
    {
        return $this->sta_prod;
    }

    /**
     * Sets the value of sta_prod.
     *
     * @param mixed $sta_prod the sta prod
     *
     * @return self
     */
    protected function setStaProd($sta_prod)
    {
        $this->sta_prod = $sta_prod;

        return $this;
    }

    /**
     * Gets the value of nom_prod.
     *
     * @return mixed
     */
    public function getNomProd()
    {
        return $this->nom_prod;
    }

    /**
     * Sets the value of nom_prod.
     *
     * @param mixed $nom_prod the nom prod
     *
     * @return self
     */
    protected function setNomProd($nom_prod)
    {
        $this->nom_prod = $nom_prod;

        return $this;
    }

    /**
     * Gets the value of ref_prod.
     *
     * @return mixed
     */
    public function getRefProd()
    {
        return $this->ref_prod;
    }

    /**
     * Sets the value of ref_prod.
     *
     * @param mixed $ref_prod the ref prod
     *
     * @return self
     */
    protected function setRefProd($ref_prod)
    {
        $this->ref_prod = $ref_prod;

        return $this;
    }

    /**
     * Gets the value of key_prod.
     *
     * @return mixed
     */
    public function getKeyProd()
    {
        return $this->key_prod;
    }

    /**
     * Sets the value of key_prod.
     *
     * @param mixed $key_prod the key prod
     *
     * @return self
     */
    protected function setKeyProd($key_prod)
    {
        $this->key_prod = $key_prod;

        return $this;
    }

    /**
     * Gets the value of cli_id.
     *
     * @return mixed
     */
    public function getCliId()
    {
        return $this->cli_id;
    }

    /**
     * Sets the value of cli_id.
     *
     * @param mixed $cli_id the cli id
     *
     * @return self
     */
    protected function setCliId(User $cli_id)
    {
        $this->cli_id = $cli_id;

        return $this;
    }

    /**
     * Gets the value of typ_id.
     *
     * @return mixed
     */
    public function getTypId()
    {
        return $this->typ_id;
    }

    /**
     * Sets the value of typ_id.
     *
     * @param mixed $typ_id the typ id
     *
     * @return self
     */
    protected function setTypId(Type $typ_id)
    {
        $this->typ_id = $typ_id;

        return $this;
    }
}



?>