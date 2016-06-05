<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="Temperature")
 */
class Temperature 
{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_temp;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $time_temp;

	/**
     * @ORM\Column(type="integer")
     */
	protected $val_temp;







}