<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\ProductReview;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ReviewController extends AbstractController
{
    /**
     * @Route ("/get/all_reviews", name="get_all_reviews", methods="GET")
     */
    public function index(EntityManagerInterface $entityManager, UserInterface $user): Response
    {
        $checkRole = $user->getRoles();
        $userID = $user->getId();
        // check role
        if($checkRole[0] === "ROLE_ADMIN"){
            $repository = $entityManager->getRepository(ProductReview::class);
            $reviews = $repository->findByExampleField('all');
//            dd($reviews);
            return $this->render('review/admin_review.html.twig', [
                'reviews' => $reviews,
            ]);
        }else{
            $repository = $entityManager->getRepository(Product::class);
            $reviews = $repository->search($userID);
            return $this->render('review/index.html.twig', [
                'reviews' => $reviews,
            ]);
        }

    }
}
