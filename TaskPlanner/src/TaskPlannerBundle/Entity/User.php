<?php

namespace TaskPlannerBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
// use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="TaskPlannerBundle\Repository\UserRepository")
 */

class User extends \FOS\UserBundle\Model\User
{

  public function __construct()
  {
    parent::__construct();
    $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
  }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="categories", type="string", length=255)
     */
    private $categories;

    /**
     * @var string
     *
     * @ORM\Column(name="tasks", type="string", length=255)
     */
    private $tasks;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categories
     *
     * @param string $categories
     * @return User
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set tasks
     *
     * @param string $tasks
     * @return User
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Get tasks
     *
     * @return string
     */
    public function getTasks()
    {
      return $this->tasks;
    }

    /**
    * Add tasks
    *
    * @param \TaskPlannerBundle\Entity\Task $tasks
    * @return User
    */
    public function addTask(\TaskPlannerBundle\Entity\Task $tasks)
    {
      $this -> tasks[] = $tasks;
      return $this;
    }

    /**
    * Remove tasks
    *
    * @param \TaskPlannerBundle\Entity\Task $tasks
    */
    public function removeTask(\TaskPlannerBundle\Entity\Task $tasks)
    {
      $this->tasks->removeElement($tasks);
    }

    /**
    * Add categories
    *
    * @param \TaskPlannerBundle\Entity\Category $categories
    * @return User
    */
    public function addCategory(\TaskPlannerBundle\Entity\Category $categories)
    {
      $this -> categories[] = $categories;
      return $this;
    }

    /**
    * Remove categories
    *
    * @param \TaskPlannerBundle\Entity\Category $categories
    */
    public function removeCategory(\TaskPlannerBundle\Entity\Category $categories)
    {
       $this -> categories -> removeElement($categories);
     }
}
