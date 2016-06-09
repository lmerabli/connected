<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="session")
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












    /**
     * Gets the value of id_sess.
     *
     * @return mixed
     */
    public function getIdSess()
    {
        return $this->id_sess;
    }

    /**
     * Sets the value of id_sess.
     *
     * @param mixed $id_sess the id sess
     *
     * @return self
     */
    protected function setIdSess($id_sess)
    {
        $this->id_sess = $id_sess;

        return $this;
    }

    /**
     * Gets the value of sta_sess.
     *
     * @return mixed
     */
    public function getStaSess()
    {
        return $this->sta_sess;
    }

    /**
     * Sets the value of sta_sess.
     *
     * @param mixed $sta_sess the sta sess
     *
     * @return self
     */
    protected function setStaSess($sta_sess)
    {
        $this->sta_sess = $sta_sess;

        return $this;
    }

    /**
     * Gets the value of time_deb_sess.
     *
     * @return mixed
     */
    public function getTimeDebSess()
    {
        return $this->time_deb_sess;
    }

    /**
     * Sets the value of time_deb_sess.
     *
     * @param mixed $time_deb_sess the time deb sess
     *
     * @return self
     */
    protected function setTimeDebSess($time_deb_sess)
    {
        $this->time_deb_sess = $time_deb_sess;

        return $this;
    }

    /**
     * Gets the value of time_fin_sess.
     *
     * @return mixed
     */
    public function getTimeFinSess()
    {
        return $this->time_fin_sess;
    }

    /**
     * Sets the value of time_fin_sess.
     *
     * @param mixed $time_fin_sess the time fin sess
     *
     * @return self
     */
    protected function setTimeFinSess($time_fin_sess)
    {
        $this->time_fin_sess = $time_fin_sess;

        return $this;
    }

    /**
     * Gets the value of type_sess.
     *
     * @return mixed
     */
    public function getTypeSess()
    {
        return $this->type_sess;
    }

    /**
     * Sets the value of type_sess.
     *
     * @param mixed $type_sess the type sess
     *
     * @return self
     */
    protected function setTypeSess($type_sess)
    {
        $this->type_sess = $type_sess;

        return $this;
    }
}