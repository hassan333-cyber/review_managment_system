<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\ProductReview;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ProductController extends AbstractController
{
    /**
     * @Security("is_granted('ROLE_USER')")
     * @Route("/all_products", name="all_products", methods="GET")
     */
    public function index(EntityManagerInterface $entityManager, UserInterface $user): Response
    {
        $repository = $entityManager->getRepository(Product::class);
        $products = $repository->findAll();
//     dd($products);
        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    // Set rating for product
    /**
     * @Route("/api/setProductRating" , name="set_product_rating", methods="POST")
     */
    public function set_product_rating(Request $request, UserInterface $user, EntityManagerInterface $entityManager){

        $productID = $request->request->get("productID");
        $productRating = $request->request->get("productRating");
        $userID = $user->getId();

        $entityManager = $this->getDoctrine()->getManager();
        $checkReview = $entityManager->getRepository(ProductReview::class)->findOneBySomeField($userID,$productID);

        $product = new ProductReview();

        // check if already rate then update it.
        if (!$checkReview){

            $product->setProductId($productID);
            $product->setUserId($userID);
            $product->setRating($productRating);

            $product->setIsActive(1);

            $entityManager->persist($product);
            $entityManager->flush();

            return $this->json(['message' => "Success ! Your rating is set."]);
        }else{
            $checkReview[0]->setRating($productRating);
            $entityManager->flush();
            return $this->json(['message' => "Updated ! Your rating is updated."]);
        }

    }
}
