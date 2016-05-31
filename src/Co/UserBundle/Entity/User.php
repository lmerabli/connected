<?php 

namespace Co\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\objet_connected
 * @ORM\Table(name="User")
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
	






	
} 
	

?>