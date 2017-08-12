<?php
// src/TaskPlannerBundle/Menu/Builder.php
namespace TaskPlannerBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
  use ContainerAwareTrait;

  public function mainMenu(FactoryInterface $factory, array $options)
  {
    $menu = $factory->createItem('root');

    $menu->addChild('Home', array('route' => 'homepage'));

    // create another menu item
    $menu->addChild('About Me', array('route' => 'fos_user_profile_show'));

    // you can also add sub level's to your menu's as follows
    $menu->addChild('Edit Profile', array('route' => 'fos_user_profile_edit'));

    $menu->addChild('All Categories', array('route' => 'category_index'));

    // access services from the container!
    $em = $this->container->get('doctrine')->getManager();

    // findMostRecent and Blog are just imaginary examples
    $categories = $em->getRepository('TaskPlannerBundle:Category')->findAll();

    foreach ($categories as $category) {

      $menu->addChild('Latest Add Category', array(
        'route' => 'category_show',
        'routeParameters' => array('id' => $category->getId())
      ));
    }

    $menu->addChild('All Comments', array('route' => 'comments_index'));

    $comments = $em->getRepository('TaskPlannerBundle:Comments')->findAll();

    foreach ($comments as $comment) {

      $menu->addChild('Latest Add Comment', array(
        'route' => 'comments_show',
        'routeParameters' => array('id' => $comment->getId())
      ));
    }

    $menu->addChild('All Tasks', array('route' => 'task_index'));

    $tasks = $em->getRepository('TaskPlannerBundle:Comments')->findAll();

    foreach ($tasks as $task) {

      $menu->addChild('Latest Add Task', array(
        'route' => 'task_show',
        'routeParameters' => array('id' => $task->getId())
      ));
    }

    // ... add more children

    return $menu;
  }
}
