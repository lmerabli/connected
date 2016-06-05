<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="Pression")
 */
class Pression 
{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_press;


	/**
     * @ORM\Column(type="datetime")
     */
	protected $time_press;

	/**
     * @ORM\Column(type="integer")
     */
	protected $val_press;




}