<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Acme\HelloBundle\Repository\KidsRepository")
 */
class Kids{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $k_id;

    /**
     * @ORM\ManyToOne(targetEntity="Faces", inversedBy="kids")
     * @ORM\JoinColumn(name="f_id", referencedColumnName="f_id")
     */
    protected $faces;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $fullName;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $soname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $fathersName;

    /**
     * @ORM\Column(type="date")
     */
    protected $birthDate;

    /**
     * @ORM\Column(type="integer")
     */
    protected $gender;

    public static function loadValidatorMetadata(ClassMetadata $metadata){
        //$metadata->addPropertyConstraint('f_id', new NotBlank());
        $metadata->addPropertyConstraint('fullName', new NotBlank());
        $metadata->addPropertyConstraint('soname', new NotBlank());
        $metadata->addPropertyConstraint('name', new NotBlank());
        $metadata->addPropertyConstraint('fathersName', new NotBlank());
        $metadata->addPropertyConstraint('birthDate', new Assert\Date());
        $metadata->addPropertyConstraint('gender', new NotBlank());
    }

    /**
     * Get k_id
     *
     * @return integer 
     */
    public function getKId()
    {
        return $this->k_id;
    }

    /**
     * Set f_id
     *
     * @param integer $fId
     * @return Kids
     */
    public function setFId($fId)
    {
        $this->f_id = $fId;

        return $this;
    }

    /**
     * Get f_id
     *
     * @return integer 
     */
    public function getFId()
    {
        return $this->f_id;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return Kids
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set soname
     *
     * @param string $soname
     * @return Kids
     */
    public function setSoname($soname)
    {
        $this->soname = $soname;

        return $this;
    }

    /**
     * Get soname
     *
     * @return string 
     */
    public function getSoname()
    {
        return $this->soname;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Kids
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fathersName
     *
     * @param string $fathersName
     * @return Kids
     */
    public function setFathersName($fathersName)
    {
        $this->fathersName = $fathersName;

        return $this;
    }

    /**
     * Get fathersName
     *
     * @return string 
     */
    public function getFathersName()
    {
        return $this->fathersName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Kids
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return Kids
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set faces
     *
     * @param integer $faces
     * @return Kids
     */
    public function setFaces($faces)
    {
        $this->faces = $faces;

        return $this;
    }

    /**
     * Get faces
     *
     * @return integer 
     */
    public function getFaces()
    {
        return $this->faces;
    }
}
