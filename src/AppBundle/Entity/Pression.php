<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="pression")
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





    /**
     * Gets the value of id_press.
     *
     * @return mixed
     */
    public function getIdPress()
    {
        return $this->id_press;
    }

    /**
     * Sets the value of id_press.
     *
     * @param mixed $id_press the id press
     *
     * @return self
     */
    protected function setIdPress($id_press)
    {
        $this->id_press = $id_press;

        return $this;
    }

    /**
     * Gets the value of time_press.
     *
     * @return mixed
     */
    public function getTimePress()
    {
        return $this->time_press;
    }

    /**
     * Sets the value of time_press.
     *
     * @param mixed $time_press the time press
     *
     * @return self
     */
    protected function setTimePress($time_press)
    {
        $this->time_press = $time_press;

        return $this;
    }

    /**
     * Gets the value of val_press.
     *
     * @return mixed
     */
    public function getValPress()
    {
        return $this->val_press;
    }

    /**
     * Sets the value of val_press.
     *
     * @param mixed $val_press the val press
     *
     * @return self
     */
    protected function setValPress($val_press)
    {
        $this->val_press = $val_press;

        return $this;
    }
}