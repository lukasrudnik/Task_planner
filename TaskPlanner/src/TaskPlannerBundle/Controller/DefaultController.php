<?php
namespace TaskPlannerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
}

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use Symfony\Component\HttpFoundation\Request;

// class DefaultController extends Controller
// {
//   /**
//   * @Route("/", name="homepage")
//   */
//     public function indexAction(Request $request)
//     {
//         return $this->render('default/index.html.twig', array(
//             'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
//         ));
//     }
//
//     /**
//     * @Route("/", name="userpage")
//     */
//     public function indexAction(Request $request)
//     {
//         return $this->render('default/index2.html.twig', array(
//             'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
//         ));
//     }
// }
