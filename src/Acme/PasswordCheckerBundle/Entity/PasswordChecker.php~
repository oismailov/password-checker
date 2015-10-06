<?php

namespace Acme\PasswordCheckerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="PasswordCheckerRepository")
 * @ORM\Table(name="passwords")
 * @ORM\HasLifecycleCallbacks
 */
class PasswordChecker
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="password", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $password;

    /**
     * @ORM\Column(name="valid", type="boolean")
     */
    private $valid;

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
     * Set password
     *
     * @param string $password
     *
     * @return PasswordChecker
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
     * Set valid
     *
     * @param boolean $valid
     *
     * @return PasswordChecker
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean
     */
    public function getValid()
    {
        return $this->valid;
    }
}
