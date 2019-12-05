<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Eternity
 *
 * @ORM\Table(name="eternity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EternityRepository")
 */
class Eternity
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=255)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="url_api", type="string", length=255)
     */
    private $urlApi;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ticket",mappedBy="eternity")
     */
    private $tickets;


    public function __construct(){
        $this->tickets = new ArrayCollection();
    }

    public function getTickets(){
        return $this->tickets;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Eternity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set login.
     *
     * @param string $login
     *
     * @return Eternity
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pwd.
     *
     * @param string $pwd
     *
     * @return Eternity
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd.
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    public function __toString(){
        $str = '';
        if(!is_null($this->name)){
            $str = $this->name;
        }
        return $str;
    }

    public function getUrlApi(){
        return $this->urlApi;
    }

    public function setUrlApi($url){
        $this->urlApi = $url;
    }
}
