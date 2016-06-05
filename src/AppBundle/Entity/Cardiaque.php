<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="Cardiaque")
 */
class Cardiaque 
{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_card;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $time_card;

	/**
     * @ORM\Column(type="integer")
     */
	protected $val_card;







}