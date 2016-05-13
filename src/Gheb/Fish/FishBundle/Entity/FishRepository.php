<?php

namespace Gheb\Fish\FishBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Class FishRepository
 * @author  Grégoire Hébert <gregoire@opo.fr>
 * @package Gheb\Fish\FishBundle\Entity
 */
class FishRepository extends EntityRepository
{
    /**
     * Return an alive fish or null
     * there cannot be two fishes alive at the same time
     * @return Fish|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findAliveFish()
    {
        $qb = $this->createQueryBuilder('f');
        $qb->where('f.health > 0');

        return $qb->getQuery()->getOneOrNullResult();
    }
}