<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="Programme")
 */
class Programme 
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_prog;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $lib_prog;

	/**
     * @ORM\Column(type="integer")
     */
	protected $force_prog;

	/**
     * @ORM\Column(type="integer")
     */
	protected $num_prog;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $com_prog;






}