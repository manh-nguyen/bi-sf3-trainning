<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * President
 * @UniqueEntity("username")
 */
class President implements UserInterface,\Serializable
{
    /**
     * @var int
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * @var string
     */
    private $name;
    /**
     * @var integer
     */
    private $death;
    /**
     * @var string
     *
     */
    private $username;
    private $plainPassword;
    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $birthday;

    /**
     * @var string
     */
    private $tookOffice;

    /**
     * @var string
     */
    private $leftOffice;

    /**
     * @var string
     */
    private $party;

    /**
     * @var string
     */
    private $partyColor;

    /**
     * @var string
     */
    private $vicePresident;

    /**
     * @var string
     */
    private $term;

    /**
     * @var string
     * @ORM\Column(type="string")
     *
     * @Assert\File(mimeTypes={  "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *          "image/ico",
     *          "image/tif"
     *      })
     */
    private $images;

    /**
     * Get death
     *
     * @return integer
     */
    public function getDeath()
    {
        return $this->death;
    }

    /**
     * Set death
     *
     * @param integer $death
     *
     * @return President
     */
    public function setDeath($death)
    {
        $this->death = $death;
    }


    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return President
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
     * Set username
     *
     * @param string $username
     *
     * @return President
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return President
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set birthday
     *
     * @param string $birthday
     *
     * @return President
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set tookOffice
     *
     * @param string $tookOffice
     *
     * @return President
     */
    public function setTookOffice($tookOffice)
    {
        $this->tookOffice = $tookOffice;

        return $this;
    }

    /**
     * Get tookOffice
     *
     * @return string
     */
    public function getTookOffice()
    {
        return $this->tookOffice;
    }

    /**
     * Set leftOffice
     *
     * @param string $leftOffice
     *
     * @return President
     */
    public function setLeftOffice($leftOffice)
    {
        $this->leftOffice = $leftOffice;

        return $this;
    }

    /**
     * Get leftOffice
     *
     * @return string
     */
    public function getLeftOffice()
    {
        return $this->leftOffice;
    }

    /**
     * Set party
     *
     * @param string $party
     *
     * @return President
     */
    public function setParty($party)
    {
        $this->party = $party;

        return $this;
    }

    /**
     * Get party
     *
     * @return string
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Set partyColor
     *
     * @param string $partyColor
     *
     * @return President
     */
    public function setPartyColor($partyColor)
    {
        $this->partyColor = $partyColor;

        return $this;
    }

    /**
     * Get partyColor
     *
     * @return string
     */
    public function getPartyColor()
    {
        return $this->partyColor;
    }

    /**
     * Set vicePresident
     *
     * @param string $vicePresident
     *
     * @return President
     */
    public function setVicePresident($vicePresident)
    {
        $this->vicePresident = $vicePresident;

        return $this;
    }

    /**
     * Get vicePresident
     *
     * @return string
     */
    public function getVicePresident()
    {
        return $this->vicePresident;
    }

    /**
     * Set term
     *
     * @param string $term
     *
     * @return President
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set images
     *
     * @param string $images
     *
     * @return President
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    public function serialize()
    {
        // TODO: Implement serialize() method.
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }

    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
        list(
            $this->id,
            $this->username,
            $this->password
            )  = unserialize($serialized);
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
        return [
            'ROLE_USER',
        ];
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

}

