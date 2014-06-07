<?php

namespace JwPersistentUserDoctrine\Model;

use Doctrine\ORM\Mapping as ORM;

use JwPersistentUser\Model\SerieTokenInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="userSerieToken")
 */
class SerieToken implements SerieTokenInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    protected $userId;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=10)
     *
     * @var string
     */
    protected $serie;

    /**
     * @ORM\Column(type="string", length=10)
     *
     * @var string
     */
    protected $token;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    protected $expiresAt;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     *
     * @var string|null
     */
    protected $ipAddress;

    /**
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * @param string $serie
     * @return $this
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param \DateTime $expiresAt
     * @return $this
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param null|string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
}
