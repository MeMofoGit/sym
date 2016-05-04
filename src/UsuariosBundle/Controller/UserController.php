<?php

namespace UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('UsuariosBundle:User')->findByActivoB(1);
        
        // $res = 'Lista de usuarios: <br />';
        
        // foreach($users as $user) {
        //     $res .= 'Usuario: ' . $user->getUsername() . ' - Email: ' . $user->getEmail() . '<br />';
        // }
        
        // return new Response($res);
        
        return $this->render('UsuariosBundle:User:index.html.twig', array('users' => $users));
    }
    public function viewAction($id)
    {
        
        $repository = $this->getDoctrine()->getRepository('UsuariosBundle:User');
        
        $user = $repository->find($id);
        //$user = $repository->findOneByActivoB($id);
        
        return new Response('Usuario: ' . $user->getUsername());
        
    }
    
}
