<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="Session")
 */
class Session 
{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_sess;

	/**
     * @ORM\Column(type="integer")
     */
	protected $sta_sess;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $time_deb_sess;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $time_fin_sess;

	/**
     * @ORM\Column(type="integer")
     */
	protected $type_sess;











}