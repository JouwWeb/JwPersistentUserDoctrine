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

    public function getSerie()
    {
        return $this->serie;
    }

    public function setSerie($serie)
    {
        $this->serie = $serie;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    public function setExpiresAt($expiresAt)
    {
        $this->expiresAt = $expiresAt;
    }
}
