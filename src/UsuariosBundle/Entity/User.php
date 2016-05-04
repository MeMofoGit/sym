<?php

namespace UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="UsuariosBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="username", type="string", length=30)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=30)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_enum", type="string", columnDefinition="ENUM('ADMIN', 'USUARIO')", length=50)
     */
    private $tipoEnum;

    /**
     * @var bool
     *
     * @ORM\Column(name="activo_b", type="boolean")
     */
    private $activoB;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRegistro_dt", type="datetime")
     */
    private $fechaRegistroDt;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaUpdate_dt", type="datetime")
     */
    private $fechaUpdateDt;


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
     * Set username
     *
     * @param string $username
     *
     * @return User
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return User
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return User
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
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
     * Set tipoEnum
     *
     * @param integer $tipoEnum
     *
     * @return User
     */
    public function setTipoEnum($grupoXref)
    {
        $this->tipoEnum = $tipoEnum;

        return $this;
    }

    /**
     * Get tipoEnum
     *
     * @return int
     */
    public function getTipoEnum()
    {
        return $this->tipoEnum;
    }

    /**
     * Set activoB
     *
     * @param boolean $activoB
     *
     * @return User
     */
    public function setActivoB($activoB)
    {
        $this->activoB = $activoB;

        return $this;
    }

    /**
     * Get activoB
     *
     * @return bool
     */
    public function getActivoB()
    {
        return $this->activoB;
    }

    /**
     * Set fechaRegistroDt
     *
     * @param \DateTime $fechaRegistroDt
     *
     * @return User
     */
    public function setFechaRegistroDt($fechaRegistroDt)
    {
        $this->fechaRegistroDt = $fechaRegistroDt;

        return $this;
    }

    /**
     * Get fechaRegistroDt
     *
     * @return \DateTime
     */
    public function getFechaRegistroDt()
    {
        return $this->fechaRegistroDt;
    }
        /**
     * Set fechaUpdateDt
     *
     * @param \DateTime $fechaUpdateDt
     *
     * @return User
     */
    public function setFechaUpdateDt($fechaRegistroDt)
    {
        $this->fechaUpdateDt = $fechaUpdateDt;

        return $this;
    }

    /**
     * Get fechaUpdateDt
     *
     * @return \DateTime
     */
    public function getFechaUpdateDt()
    {
        return $this->fechaUpdateDt;
    }
}

