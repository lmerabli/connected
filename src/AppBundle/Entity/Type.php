<?php 

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="type")
 */
class Type 
{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id_typ;

	/**
     * @ORM\Column( type="string", length=255)
     */
	protected $libel_typ;




    /**
     * Gets the value of id_typ.
     *
     * @return mixed
     */
    public function getIdTyp()
    {
        return $this->id_typ;
    }

    /**
     * Sets the value of id_typ.
     *
     * @param mixed $id_typ the id typ
     *
     * @return self
     */
    protected function setIdTyp($id_typ)
    {
        $this->id_typ = $id_typ;

        return $this;
    }

    /**
     * Gets the value of libel_typ.
     *
     * @return mixed
     */
    public function getLibelTyp()
    {
        return $this->libel_typ;
    }

    /**
     * Sets the value of libel_typ.
     *
     * @param mixed $libel_typ the libel typ
     *
     * @return self
     */
    protected function setLibelTyp($libel_typ)
    {
        $this->libel_typ = $libel_typ;

        return $this;
    }
}