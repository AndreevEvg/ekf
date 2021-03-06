<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Acme\HelloBundle\Repository\FacesRepository")
 */
class Faces{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $f_id;

    /**
    * @ORM\OneToMany(targetEntity="Kids", mappedBy="faces")
    */
    protected $kids;

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
    
    public function __toString(){
        
        return $this->getfullName();
    }

    public function __construct(){

        $this->kids = new ArrayCollection();
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata){
        $metadata->addPropertyConstraint('fullName', new NotBlank());
        $metadata->addPropertyConstraint('soname', new NotBlank());
        $metadata->addPropertyConstraint('name', new NotBlank());
        $metadata->addPropertyConstraint('fathersName', new NotBlank());
        $metadata->addPropertyConstraint('birthDate', new Assert\Date());
        $metadata->addPropertyConstraint('gender', new NotBlank());
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
     * @return Faces
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
     * @return Faces
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
     * @return Faces
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
     * @return Faces
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
     * @return Faces
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
     * @return Faces
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
     * Add kids
     *
     * @param \Acme\HelloBundle\Entity\Kids $kids
     * @return Faces
     */
    public function addKid(\Acme\HelloBundle\Entity\Kids $kids)
    {
        $this->kids[] = $kids;

        return $this;
    }

    /**
     * Remove kids
     *
     * @param \Acme\HelloBundle\Entity\Kids $kids
     */
    public function removeKid(\Acme\HelloBundle\Entity\Kids $kids)
    {
        $this->kids->removeElement($kids);
    }

    /**
     * Get kids
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getKids()
    {
        return $this->kids;
    }
}
