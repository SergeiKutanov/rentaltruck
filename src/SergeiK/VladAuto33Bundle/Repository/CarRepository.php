<?php

namespace SergeiK\VladAuto33Bundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr;

class CarRepository extends EntityRepository
{
    public function getFreeCars(\DateTime $start = null, \DateTime $end = null)
    {

        $qb = $this->getEntityManager()->createQueryBuilder();
        if($start === null && $end === null)
        {
            $now = new \DateTime();
            $qb->select('c')
            ->from('SergeiKVladAuto33Bundle:Car', 'c')
            ->leftJoin('SergeiKVladAuto33Bundle:Booking', 'b', 'WITH', 'c.id != b.car')
            ->where('b.active = 1')
            ->andWhere("b.start_date > '".$now->format('Y-m-d')."'")
            ->andWhere('c.published = 1');
        }
        else
        {
            $qb->select('c')
                ->from('SergeiKVladAuto33Bundle:Car', 'c')
                ->leftJoin('SergeiKVladAuto33Bundle:Booking', 'b', 'WITH', 'c.id = b.car')
                ->where('c.published = 1')
                ->andWhere('b.active = 1')
                ->andWhere($qb->expr()->orX(
                    $qb->expr()->isNull('b.id'),
                    $qb->expr()->orX(
                        $qb->expr()->andX(
                            "b.start_date < '".$start->format("Y-m-d")."'",
                            "b.over_date < '".$end->format("Y-m-d")."'"
                        ),
                        $qb->expr()->andX(
                            "b.start_date > '".$start->format("Y-m-d")."'",
                            "b.over_date > '".$end->format("Y-m-d")."'"
                        )
                    )
                ))
                ->groupBy('c.id');
        }

        return $qb->getQuery()->getResult();
    }

    public function getBookings($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('b')
            ->from('SergeiKVladAuto33Bundle:Booking', 'b')
            ->where('b.active = 1')
            ->andWhere(
                $qb->expr()->eq('b.car', $id)
            )
            ->orderBy('b.start_date');
        return $qb->getQuery()->getResult();
    }
}
