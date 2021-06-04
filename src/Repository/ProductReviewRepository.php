<?php

namespace App\Repository;

use App\Entity\Product;
use App\Entity\ProductReview;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProductReview|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductReview|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductReview[]    findAll()
 * @method ProductReview[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductReviewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductReview::class);
    }

    // /**
    //  * @return ProductReview[] Returns an array of ProductReview objects
    //  */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->select('product.name, product.description, COUNT(p.product_id) AS TotalProduct','SUM(p.rating) as TotalRating')
            ->join(Product::class,'product','WITH','product.id = p.product_id')
            ->groupBy('p.product_id')
            ->getQuery()
            ->getResult();

    }



    public function findOneBySomeField($user,$product): ?array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.user_id = :user')
            ->andWhere('p.product_id = :product')
            ->setParameter('user', $user)
            ->setParameter('product',$product)
            ->getQuery()
            ->getResult()
        ;
    }

}
