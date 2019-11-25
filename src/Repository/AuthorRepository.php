<?php

namespace App\Repository;

use App\Entity\Author;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Author|null find($id, $lockMode = null, $lockVersion = null)
 * @method Author|null findOneBy(array $criteria, array $orderBy = null)
 * @method Author[]    findAll()
 * @method Author[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Author::class);
    }

    // /**
    //  * @return Author[] Returns an array of Author objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Author
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * @return Author[]
     */
    public function findAllWithBook(){
        return $this->createQueryBuilder('a')
            ->leftJoin('a.books', 'b')
            ->groupBy('a.id')
            ->select('a.id,a.name,a.genre,COUNT(b.id) as book_count')
            //->addSelect(array('a', 'COUNT(b.id) as book_count'))
            ->getQuery()
            ->getResult()
            ;
        /*
         *
        return $this->createQueryBuilder('a')
            ->select('a, COUNT(b.id) as book_count')
            ->leftJoin('App\Entity\Book', 'b', 'WITH', 'a.id = b.author_id')
            ->groupBy('a.id')
            ->orderBy('a.id', 'desc')
            ->getQuery()
            ->getResult()
            ;
         */
    }
}
