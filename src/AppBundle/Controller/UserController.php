<?php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;

/**
* User Controller
*
*/
class UserController extends Controller
{
    /**
     *Lists all Users.
     *
     */

    public function indexAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('user/index.html.twig', array('users' => $users,
        ));
    }




}
