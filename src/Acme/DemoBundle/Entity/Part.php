<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Part
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\PartRepository")
 */
class Part
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_part", type="text")
     */
    private $namePart;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_part", type="integer")
     */
    private $numberPart;

    /**
       * @var string
       *
       * @ORM\Column(name="url", type="text")
       */
      private $url;

    /**
     *
     * @ORM\OneToMany(targetEntity="Source", mappedBy="project")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */

    private $idseason;




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
     * Set namePart
     *
     * @param string $namePart
     *
     * @return Part
     */
    public function setNamePart($namePart)
    {
        $this->namePart = $namePart;

        return $this;
    }

    /**
     * Get namePart
     *
     * @return string
     */
    public function getNamePart()
    {
        return $this->namePart;
    }

    /**
     * Set numberPart
     *
     * @param integer $numberPart
     *
     * @return Part
     */
    public function setNumberPart($numberPart)
    {
        $this->numberPart = $numberPart;

        return $this;
    }

    /**
     * Get numberPart
     *
     * @return integer
     */
    public function getNumberPart()
    {
        return $this->numberPart;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Part
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

//  !!!!!!!!!!!!!!!!!!!!
  /**
   * Set idseason
   *
   * @param integer $idseason
   *
   * @return Part
   */
  public function setIdseason($idseason)
  {
    $this->idseason = $idseason;

    return $this;
  }

  /**
   * Get idseason
   *
   * @return integer
   */
  public function getIdseason()
  {
    return $this->idseason;
  }
}

