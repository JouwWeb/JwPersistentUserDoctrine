<?php

namespace JwPersistentUserDoctrine\Mapper;

use Doctrine\Common\Persistence\ObjectManager;

use JwPersistentUser\Model\ModuleOptions;
use JwPersistentUser\Model\SerieTokenInterface,
    JwPersistentUser\Mapper\SerieTokenMapperInterface;

class SerieTokenMapper implements SerieTokenMapperInterface
{
    /**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * @var ModuleOptions
     */
    protected $persistentUserOptions;

    public function persist(SerieTokenInterface $serie)
    {
        $this->getObjectManager()->persist($serie);
        $this->getObjectManager()->flush();
    }

    public function remove(SerieTokenInterface $serie)
    {
        $this->getObjectManager()->remove($serie);
        $this->getObjectManager()->flush();
    }

    public function find($userId, $serie)
    {
        $class = $this->getPersistentUserOptions()->getSerieTokenEntityClass();

        $dql = 'SELECT   s
                FROM     ' . $class . ' s
                WHERE    s.userId = :userId
                    AND s.serie = :serie';

        return $this->getObjectManager()
            ->createQuery($dql)
            ->setParameter('userId', $userId)
            ->setParameter('serie', $serie)
            ->getOneOrNullResult();
    }

    public function findAllByUser(int $userId)
    {
        $class = $this->getPersistentUserOptions()->getSerieTokenEntityClass();

        $dql = 'SELECT   s
                FROM     ' . $class . ' s
                WHERE    s.userId = :userId';

        return $this->getObjectManager()
            ->createQuery($dql)
            ->setParameter('userId', $userId)
            ->getResult();
    }

    /**
     * @param ObjectManager $objectManager
     */
    public function setObjectManager($objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

    /**
     * @param ModuleOptions $persistentUserOptions
     */
    public function setPersistentUserOptions($persistentUserOptions)
    {
        $this->persistentUserOptions = $persistentUserOptions;
    }

    /**
     * @return ModuleOptions
     */
    public function getPersistentUserOptions()
    {
        return $this->persistentUserOptions;
    }
}
