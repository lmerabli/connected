<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="Produit")
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











}



?>