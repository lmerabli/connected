<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="temperature")
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

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Session")
    * @ORM\JoinColumn(nullable=false)
    */
    protected $sess_id;






    /**
     * Gets the value of id_temp.
     *
     * @return mixed
     */
    public function getIdTemp()
    {
        return $this->id_temp;
    }

    /**
     * Sets the value of id_temp.
     *
     * @param mixed $id_temp the id temp
     *
     * @return self
     */
    protected function setIdTemp($id_temp)
    {
        $this->id_temp = $id_temp;

        return $this;
    }

    /**
     * Gets the value of time_temp.
     *
     * @return mixed
     */
    public function getTimeTemp()
    {
        return $this->time_temp;
    }

    /**
     * Sets the value of time_temp.
     *
     * @param mixed $time_temp the time temp
     *
     * @return self
     */
    protected function setTimeTemp($time_temp)
    {
        $this->time_temp = $time_temp;

        return $this;
    }

    /**
     * Gets the value of val_temp.
     *
     * @return mixed
     */
    public function getValTemp()
    {
        return $this->val_temp;
    }

    /**
     * Sets the value of val_temp.
     *
     * @param mixed $val_temp the val temp
     *
     * @return self
     */
    protected function setValTemp($val_temp)
    {
        $this->val_temp = $val_temp;

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