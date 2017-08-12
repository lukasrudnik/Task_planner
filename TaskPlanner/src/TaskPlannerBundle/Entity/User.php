<?php
namespace TaskPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="TaskPlannerBundle\Repository\UserRepository")
 */
class User extends \FOS\UserBundle\Model\User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="user")
     */
    private $categories;
    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="user")
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
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }
    /**
     * Add categories
     *
     * @param \TaskPlannerBundle\Entity\Category $categories
     * @return User
     */
    public function addCategory(\TaskPlannerBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;
        return $this;
    }
    /**
     * Remove categories
     *
     * @param \TaskPlannerBundle\Entity\Category $categories
     */
    public function removeCategory(\TaskPlannerBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }
    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * Add tasks
     *
     * @param \TaskPlannerBundle\Entity\Task $tasks
     * @return User
     */
    public function addTask(\TaskPlannerBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;
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
     * Get tasks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTasks()
    {
        return $this->tasks;
    }
}
