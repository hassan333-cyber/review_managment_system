<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserController extends AbstractController
{
    /**
     * @Route("/create_user/", name="add_customer", methods={"POST"})
     */
    public function add(Request $request, EntityManagerInterface $entityManager, PasswordEncoderInterface $passwordEncoder): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $email = $data['email'];
        $password = $data['password'];
        $user = new User();

        $user->setEmail($email);
        // hashing the password
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $password
            )
        );
        $user->setRoles(array("ROLE_USER"));

        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse(['status' => 'User created!'], Response::HTTP_CREATED);
    }
    // get user info

    /**
     * @Route ("/get_user_info/{id}", name="get_user_info", methods={"GET"})
     */
    public function get_users_info($id){

        $entity= $this->getDoctrine()->getManager();
        $user = $entity->getRepository(User::class)->findOneBy(['id' => $id]);
        $user = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRoles()
        ];
        return new JsonResponse($user, Response::HTTP_OK);
    }
    // get all users

    /**
     * @Route ("/all_users_info", name="all_users_info", methods={"GET"})
     */
    public function get_all_user(){
       $entity =  $this->getDoctrine()->getmanager();
        $users = $entity->getRepository(User::class)->findAll();
        $users_data=[];
        foreach ($users as $user) {
            $users_data[] = [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'role' => $user->getRoles()
            ];
        }
        return new JsonResponse($users_data, Response::HTTP_OK);
    }


}
