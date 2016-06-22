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
    protected $sess_id;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Programme")
    * @ORM\JoinColumn(nullable=false)
    */
    protected $prog_id;






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
     * Gets the value of sess_id.
     *
     * @return mixed
     */
    public function getSessId()
    {
        return $this->sess_id;
    }

    /**
     * Sets the value of sess_id.
     *
     * @param mixed $sess_id the sess id
     *
     * @return self
     */
    protected function setSessId(Session $sess_id)
    {
        $this->sess_id = $sess_id;

        return $this;
    }

    /**
     * Gets the value of prog_id.
     *
     * @return mixed
     */
    public function getProgId()
    {
        return $this->prog_id;
    }

    /**
     * Sets the value of prog_id.
     *
     * @param mixed $prog_id the prog id
     *
     * @return self
     */
    protected function setProgId(Programme $prog_id)
    {
        $this->prog_id = $prog_id;

        return $this;
    }
}