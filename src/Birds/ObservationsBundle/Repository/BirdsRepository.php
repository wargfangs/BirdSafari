<?php

namespace Birds\ObservationsBundle\Repository;

/**
 * BirdsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BirdsRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     *
     * @return array
     */
    public function getAllByArray()
    {
        $br= $this->_em->createQueryBuilder()
            ->select('b.nomVern')
            ->from('BirdsObservationsBundle:Birds','b');
            $br->where($br->expr()->neq( 'b.nomVern' , '?1'))
                ->setParameter("1","")
                ->orderBy('b.nomVern','ASC');

        return $br->getQuery()->getResult();

    }

}
