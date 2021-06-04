<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class DashboardController extends AbstractController
{
    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')")
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
//        dd($this->getUser());
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/add_user_page", name="add_user_page")
     */
    public function add_user_page(EntityManagerInterface $entityManager){

        // get all users except admin
        $repository = $entityManager->getRepository(User::class);
        $users = $repository->findOneBySomeField(1);
//        dd($users);
       return $this->render('dashboard/add_user_page.html.twig',[
           'users'=>$users
       ]);
    }
}
