<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * president_user
 *
 * @ORM\Table(name="president_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\president_userRepository")
 */
class president_user implements UserInterface,\Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="president_code", type="string", length=255)
     */
    private $presidentCode;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="datetime")
     */
    private $birthday;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="death", type="date")
     */
    private $death;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="took_office", type="date")
     */
    private $tookOffice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="left_office", type="date")
     */
    private $leftOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="party", type="string", length=255)
     */
    private $party;

    /**
     * @var string
     *
     * @ORM\Column(name="party_color", type="string", length=255)
     */
    private $partyColor;

    /**
     * @var int
     *
     * @ORM\Column(name="term", type="integer")
     */
    private $term;

    /**
     * @var string
     *
     * @ORM\Column(name="vice_president", type="string", length=255)
     */
    private $vicePresident;


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
     * @return president_user
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
     * Set presidentCode
     *
     * @param string $presidentCode
     *
     * @return president_user
     */
    public function setPresidentCode($presidentCode)
    {
        $this->presidentCode = $presidentCode;

        return $this;
    }

    /**
     * Get presidentCode
     *
     * @return string
     */
    public function getPresidentCode()
    {
        return $this->presidentCode;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return president_user
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
     * Set image
     *
     * @param string $image
     *
     * @return president_user
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return president_user
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set death
     *
     * @param \DateTime $death
     *
     * @return president_user
     */
    public function setDeath($death)
    {
        $this->death = $death;

        return $this;
    }

    /**
     * Get death
     *
     * @return \DateTime
     */
    public function getDeath()
    {
        return $this->death;
    }

    /**
     * Set tookOffice
     *
     * @param \DateTime $tookOffice
     *
     * @return president_user
     */
    public function setTookOffice($tookOffice)
    {
        $this->tookOffice = $tookOffice;

        return $this;
    }

    /**
     * Get tookOffice
     *
     * @return \DateTime
     */
    public function getTookOffice()
    {
        return $this->tookOffice;
    }

    /**
     * Set leftOffice
     *
     * @param \DateTime $leftOffice
     *
     * @return president_user
     */
    public function setLeftOffice($leftOffice)
    {
        $this->leftOffice = $leftOffice;

        return $this;
    }

    /**
     * Get leftOffice
     *
     * @return \DateTime
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
     * @return president_user
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
     * @return president_user
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
     * Set term
     *
     * @param integer $term
     *
     * @return president_user
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return int
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set vicePresident
     *
     * @param string $vicePresident
     *
     * @return president_user
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

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
        return [
            'ROLE_USER',
        ];
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
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
            ) = unserialize($serialized);
    }


}

