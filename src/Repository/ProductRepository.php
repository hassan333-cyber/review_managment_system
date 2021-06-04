<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\ProductReview;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function search($term)
    {

        return $this->createQueryBuilder('p')
            ->select('p.name','p.description','pr.rating','user.email','pr.id')
            ->join(ProductReview::class,'pr', 'WITH','pr.product_id = p.id')
            ->join(User::class,'user','WITH','user.id = pr.user_id')
            ->andWhere('pr.user_id = :val')
            ->setParameter('val', $term)
            ->orderBy('pr.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

//    public function forAdmin($value){
//        return $this->createQueryBuilder('p')
//            ->addSelect('SUM(pr.rating) AS HIDDEN totalSum','COUNT(pr.rating) as HIDDEN totalReview')
//            ->join(ProductReview::class,'pr','WITH','pr.product_id = p.id')
//            ->join(User::class,'user','WITH','user.id = pr.user_id')
//            ->groupBy('pr.product_id')
//            ->getQuery()
//            ->getResult();
//    }
    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
