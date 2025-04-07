<?php

namespace App\Repository;

use App\Entity\Tenant\App;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<App>
 */
class AppRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, App::class);
    }

    /**
     * @return App[]
     */
    public function get() : array
    {
        $query = $this->createQueryBuilder('c')
            ->getQuery();

        return $query->getResult();
    }
}
