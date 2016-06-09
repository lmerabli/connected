<?php 

namespace Co\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity()
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_cli;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $dat_crea_cli;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $dat_modif_cli;

	/**
     * @ORM\Column(type="integer")
     */
	protected $sta_cli;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $nom_cli;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $prenom_cli;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $pseudo_cli;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $dat_naiss_cli;

	/**
     * @ORM\Column(type="string", length=255, unique=true)
     */
	protected $email_cli;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $adress_cli;

	/**
     * @ORM\Column(type="integer")
     */
	protected $cp_cli;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $ville_cli;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $pays_cli;
	

	

    /**
     * Gets the value of id_cli.
     *
     * @return mixed
     */
    public function getIdCli()
    {
        return $this->id_cli;
    }

    /**
     * Sets the value of id_cli.
     *
     * @param mixed $id_cli the id cli
     *
     * @return self
     */
    protected function setIdCli($id_cli)
    {
        $this->id_cli = $id_cli;

        return $this;
    }

    /**
     * Gets the value of dat_crea_cli.
     *
     * @return mixed
     */
    public function getDatCreaCli()
    {
        return $this->dat_crea_cli;
    }

    /**
     * Sets the value of dat_crea_cli.
     *
     * @param mixed $dat_crea_cli the dat crea cli
     *
     * @return self
     */
    protected function setDatCreaCli($dat_crea_cli)
    {
        $this->dat_crea_cli = $dat_crea_cli;

        return $this;
    }

    /**
     * Gets the value of dat_modif_cli.
     *
     * @return mixed
     */
    public function getDatModifCli()
    {
        return $this->dat_modif_cli;
    }

    /**
     * Sets the value of dat_modif_cli.
     *
     * @param mixed $dat_modif_cli the dat modif cli
     *
     * @return self
     */
    protected function setDatModifCli($dat_modif_cli)
    {
        $this->dat_modif_cli = $dat_modif_cli;

        return $this;
    }

    /**
     * Gets the value of sta_cli.
     *
     * @return mixed
     */
    public function getStaCli()
    {
        return $this->sta_cli;
    }

    /**
     * Sets the value of sta_cli.
     *
     * @param mixed $sta_cli the sta cli
     *
     * @return self
     */
    protected function setStaCli($sta_cli)
    {
        $this->sta_cli = $sta_cli;

        return $this;
    }

    /**
     * Gets the value of nom_cli.
     *
     * @return mixed
     */
    public function getNomCli()
    {
        return $this->nom_cli;
    }

    /**
     * Sets the value of nom_cli.
     *
     * @param mixed $nom_cli the nom cli
     *
     * @return self
     */
    protected function setNomCli($nom_cli)
    {
        $this->nom_cli = $nom_cli;

        return $this;
    }

    /**
     * Gets the value of prenom_cli.
     *
     * @return mixed
     */
    public function getPrenomCli()
    {
        return $this->prenom_cli;
    }

    /**
     * Sets the value of prenom_cli.
     *
     * @param mixed $prenom_cli the prenom cli
     *
     * @return self
     */
    protected function setPrenomCli($prenom_cli)
    {
        $this->prenom_cli = $prenom_cli;

        return $this;
    }

    /**
     * Gets the value of pseudo_cli.
     *
     * @return mixed
     */
    public function getPseudoCli()
    {
        return $this->pseudo_cli;
    }

    /**
     * Sets the value of pseudo_cli.
     *
     * @param mixed $pseudo_cli the pseudo cli
     *
     * @return self
     */
    protected function setPseudoCli($pseudo_cli)
    {
        $this->pseudo_cli = $pseudo_cli;

        return $this;
    }

    /**
     * Gets the value of dat_naiss_cli.
     *
     * @return mixed
     */
    public function getDatNaissCli()
    {
        return $this->dat_naiss_cli;
    }

    /**
     * Sets the value of dat_naiss_cli.
     *
     * @param mixed $dat_naiss_cli the dat naiss cli
     *
     * @return self
     */
    protected function setDatNaissCli($dat_naiss_cli)
    {
        $this->dat_naiss_cli = $dat_naiss_cli;

        return $this;
    }

    /**
     * Gets the value of email_cli.
     *
     * @return mixed
     */
    public function getEmailCli()
    {
        return $this->email_cli;
    }

    /**
     * Sets the value of email_cli.
     *
     * @param mixed $email_cli the email cli
     *
     * @return self
     */
    protected function setEmailCli($email_cli)
    {
        $this->email_cli = $email_cli;

        return $this;
    }

    /**
     * Gets the value of adress_cli.
     *
     * @return mixed
     */
    public function getAdressCli()
    {
        return $this->adress_cli;
    }

    /**
     * Sets the value of adress_cli.
     *
     * @param mixed $adress_cli the adress cli
     *
     * @return self
     */
    protected function setAdressCli($adress_cli)
    {
        $this->adress_cli = $adress_cli;

        return $this;
    }

    /**
     * Gets the value of cp_cli.
     *
     * @return mixed
     */
    public function getCpCli()
    {
        return $this->cp_cli;
    }

    /**
     * Sets the value of cp_cli.
     *
     * @param mixed $cp_cli the cp cli
     *
     * @return self
     */
    protected function setCpCli($cp_cli)
    {
        $this->cp_cli = $cp_cli;

        return $this;
    }

    /**
     * Gets the value of ville_cli.
     *
     * @return mixed
     */
    public function getVilleCli()
    {
        return $this->ville_cli;
    }

    /**
     * Sets the value of ville_cli.
     *
     * @param mixed $ville_cli the ville cli
     *
     * @return self
     */
    protected function setVilleCli($ville_cli)
    {
        $this->ville_cli = $ville_cli;

        return $this;
    }

    /**
     * Gets the value of pays_cli.
     *
     * @return mixed
     */
    public function getPaysCli()
    {
        return $this->pays_cli;
    }

    /**
     * Sets the value of pays_cli.
     *
     * @param mixed $pays_cli the pays cli
     *
     * @return self
     */
    protected function setPaysCli($pays_cli)
    {
        $this->pays_cli = $pays_cli;

        return $this;
    }
} 
	

?>