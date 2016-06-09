<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="programme")
 */
class Programme 
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_prog;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $lib_prog;

	/**
     * @ORM\Column(type="integer")
     */
	protected $force_prog;

	/**
     * @ORM\Column(type="integer")
     */
	protected $num_prog;

	 /**
     * @ORM\Column( type="string", length=255)
     */
	protected $com_prog;







    /**
     * Gets the value of id_prog.
     *
     * @return mixed
     */
    public function getIdProg()
    {
        return $this->id_prog;
    }

    /**
     * Sets the value of id_prog.
     *
     * @param mixed $id_prog the id prog
     *
     * @return self
     */
    protected function setIdProg($id_prog)
    {
        $this->id_prog = $id_prog;

        return $this;
    }

    /**
     * Gets the value of lib_prog.
     *
     * @return mixed
     */
    public function getLibProg()
    {
        return $this->lib_prog;
    }

    /**
     * Sets the value of lib_prog.
     *
     * @param mixed $lib_prog the lib prog
     *
     * @return self
     */
    protected function setLibProg($lib_prog)
    {
        $this->lib_prog = $lib_prog;

        return $this;
    }

    /**
     * Gets the value of force_prog.
     *
     * @return mixed
     */
    public function getForceProg()
    {
        return $this->force_prog;
    }

    /**
     * Sets the value of force_prog.
     *
     * @param mixed $force_prog the force prog
     *
     * @return self
     */
    protected function setForceProg($force_prog)
    {
        $this->force_prog = $force_prog;

        return $this;
    }

    /**
     * Gets the value of num_prog.
     *
     * @return mixed
     */
    public function getNumProg()
    {
        return $this->num_prog;
    }

    /**
     * Sets the value of num_prog.
     *
     * @param mixed $num_prog the num prog
     *
     * @return self
     */
    protected function setNumProg($num_prog)
    {
        $this->num_prog = $num_prog;

        return $this;
    }

    /**
     * Gets the value of com_prog.
     *
     * @return mixed
     */
    public function getComProg()
    {
        return $this->com_prog;
    }

    /**
     * Sets the value of com_prog.
     *
     * @param mixed $com_prog the com prog
     *
     * @return self
     */
    protected function setComProg($com_prog)
    {
        $this->com_prog = $com_prog;

        return $this;
    }
}