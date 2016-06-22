<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="cardiaque")
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

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Session")
    * @ORM\JoinColumn(nullable=false)
    */
    protected $sess_id;







    /**
     * Gets the value of id_card.
     *
     * @return mixed
     */
    public function getIdCard()
    {
        return $this->id_card;
    }

    /**
     * Sets the value of id_card.
     *
     * @param mixed $id_card the id card
     *
     * @return self
     */
    protected function setIdCard($id_card)
    {
        $this->id_card = $id_card;

        return $this;
    }

    /**
     * Gets the value of time_card.
     *
     * @return mixed
     */
    public function getTimeCard()
    {
        return $this->time_card;
    }

    /**
     * Sets the value of time_card.
     *
     * @param mixed $time_card the time card
     *
     * @return self
     */
    protected function setTimeCard($time_card)
    {
        $this->time_card = $time_card;

        return $this;
    }

    /**
     * Gets the value of val_card.
     *
     * @return mixed
     */
    public function getValCard()
    {
        return $this->val_card;
    }

    /**
     * Sets the value of val_card.
     *
     * @param mixed $val_card the val card
     *
     * @return self
     */
    protected function setValCard($val_card)
    {
        $this->val_card = $val_card;

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
}