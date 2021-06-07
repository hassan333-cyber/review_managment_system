<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CrudController extends AbstractController
{
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }
    /**
     * @Route("/create_user", name="create_user" , methods="POST")
     */
    // Create user
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        // set email
        $user->setEmail($request->request->get('email'));
        // hashing the password
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $request->request->get('password')
            )
        );
        // set role for user
        $user->setRoles(array("ROLE_USER"));
        // save the info
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->json(['message' => "Success ! Your user is created."]);
    }

    // update user
    /**
     * @Route("/update_user_info", name="update_user_info" , methods="POST")
     */
    public function update_user_info(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager){

        $id = $request->request->get("userID");
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }

        $user->setEmail($request->request->get('email'));
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $request->request->get('password')
            )
        );
        $entityManager->flush();

        return $this->json(['message' => "Success ! Your user is updated."]);
    }

    // Delete user info
    /**
     * @Route("/delete_user_info/{id}", name="delete_user_info" , methods="GET")
     */
    public function delete_user_info($id){
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->json(['message' => "Success ! Your user is deleted."]);
    }
}
