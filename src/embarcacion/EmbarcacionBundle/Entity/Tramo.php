<?php

namespace embarcacion\EmbarcacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tramo
 */
class Tramo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $coord1;

    /**
     * @var integer
     */
    private $coord2;

    /**
     * @var integer
     */
    private $coord3;

    /**
     * @var integer
     */
    private $coord4;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Tramo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set coord1
     *
     * @param integer $coord1
     * @return Tramo
     */
    public function setCoord1($coord1)
    {
        $this->coord1 = $coord1;
    
        return $this;
    }

    /**
     * Get coord1
     *
     * @return integer 
     */
    public function getCoord1()
    {
        return $this->coord1;
    }

    /**
     * Set coord2
     *
     * @param integer $coord2
     * @return Tramo
     */
    public function setCoord2($coord2)
    {
        $this->coord2 = $coord2;
    
        return $this;
    }

    /**
     * Get coord2
     *
     * @return integer 
     */
    public function getCoord2()
    {
        return $this->coord2;
    }

    /**
     * Set coord3
     *
     * @param integer $coord3
     * @return Tramo
     */
    public function setCoord3($coord3)
    {
        $this->coord3 = $coord3;
    
        return $this;
    }

    /**
     * Get coord3
     *
     * @return integer 
     */
    public function getCoord3()
    {
        return $this->coord3;
    }

    /**
     * Set coord4
     *
     * @param integer $coord4
     * @return Tramo
     */
    public function setCoord4($coord4)
    {
        $this->coord4 = $coord4;
    
        return $this;
    }

    /**
     * Get coord4
     *
     * @return integer 
     */
    public function getCoord4()
    {
        return $this->coord4;
    }
}
