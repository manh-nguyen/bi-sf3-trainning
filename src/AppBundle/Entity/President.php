<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * President
 */
class President implements UserInterface,\Serializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $username;
    private $plainPassword;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var \DateTime
     */
    private $death;

    /**
     * @var \DateTime
     */
    private $tookoffice;

    /**
     * @var \DateTime
     */
    private $leftoffice;

    /**
     * @var string
     */
    private $party;

    /**
     * @var string
     */
    private $term;

    /**
     * @var string
     */
    private $vicepresident;

    /**
     * @var string
     */
    private $color;

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
    private $image;


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
     * @param \DateTime $birthday
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
     * @return President
     */
    public function setDeath($death)
    {
        $this->death = $death;

        return $this;
    }

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
     * Get death
     *
     * @return \DateTime
     */
    public function getDeath()
    {
        return $this->death;
    }

    /**
     * Set tookoffice
     *
     * @param \DateTime $tookoffice
     *
     * @return President
     */
    public function setTookoffice($tookoffice)
    {
        $this->tookoffice = $tookoffice;

        return $this;
    }

    /**
     * Get tookoffice
     *
     * @return \DateTime
     */
    public function getTookoffice()
    {
        return $this->tookoffice;
    }

    /**
     * Set leftoffice
     *
     * @param \DateTime $leftoffice
     *
     * @return President
     */
    public function setLeftoffice($leftoffice)
    {
        $this->leftoffice = $leftoffice;

        return $this;
    }

    /**
     * Get leftoffice
     *
     * @return \DateTime
     */
    public function getLeftoffice()
    {
        return $this->leftoffice;
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
     * Set vicepresident
     *
     * @param string $vicepresident
     *
     * @return President
     */
    public function setVicepresident($vicepresident)
    {
        $this->vicepresident = $vicepresident;

        return $this;
    }

    /**
     * Get vicepresident
     *
     * @return string
     */
    public function getVicepresident()
    {
        return $this->vicepresident;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return President
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return President
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

