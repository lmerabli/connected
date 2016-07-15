<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="choix")
 */
class Choix 
{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_choix;

	/**
     * @ORM\Column(type="datetime")
     */
	protected $time_choix;

	/**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Session")
    * @ORM\JoinColumn(nullable=false)
    */
    protected $session;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Programme")
    * @ORM\JoinColumn(nullable=false)
    */
    protected $prog;






    /**
     * Gets the value of id_choix.
     *
     * @return mixed
     */
    public function getIdChoix()
    {
        return $this->id_choix;
    }

    /**
     * Sets the value of id_choix.
     *
     * @param mixed $id_choix the id choix
     *
     * @return self
     */
    protected function setIdChoix($id_choix)
    {
        $this->id_choix = $id_choix;

        return $this;
    }

    /**
     * Gets the value of time_choix.
     *
     * @return mixed
     */
    public function getTimeChoix()
    {
        return $this->time_choix;
    }

    /**
     * Sets the value of time_choix.
     *
     * @param mixed $time_choix the time choix
     *
     * @return self
     */
    protected function setTimeChoix($time_choix)
    {
        $this->time_choix = $time_choix;

        return $this;
    }

   

    

    /**
     * Gets the value of session.
     *
     * @return mixed
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Sets the value of session.
     *
     * @param mixed $session the session
     *
     * @return self
     */
    protected function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Gets the value of prog.
     *
     * @return mixed
     */
    public function getProg()
    {
        return $this->prog;
    }

    /**
     * Sets the value of prog.
     *
     * @param mixed $prog the prog
     *
     * @return self
     */
    protected function setProg($prog)
    {
        $this->prog = $prog;

        return $this;
    }
}