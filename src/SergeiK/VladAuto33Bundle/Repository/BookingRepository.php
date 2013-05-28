<?php

namespace SergeiK\VladAuto33Bundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr;

class BookingRepository extends EntityRepository
{
    public function getActiveBookings()
    {
        $now = new \DateTime();

        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->add('select', 'b')
            ->add('from', 'SergeiKVladAuto33Bundle:Booking b')
            ->add('where',
                $qb->expr()->orX(
                    $qb->expr()->orX(
                        $qb->expr()->isNull('b.checked'),
                        $qb->expr()->eq('b.checked', '0')
                    ),
                    $qb->expr()->andX(
                        $qb->expr()->eq('b.active', '1'),
                        $qb->expr()->eq('b.checked', '1')
                    )
                ))
            ->andWhere("b.start_date > '".$now->format("Y-m-d")."'")
            ->add('orderBy', new Expr\OrderBy('b.start_date', 'ASC'));
        return $qb->getQuery()->getResult();
    }
}
