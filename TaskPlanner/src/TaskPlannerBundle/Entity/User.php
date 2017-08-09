<?php

namespace TaskPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="TaskPlannerBundle\Repository\UserRepository")
 */
class User
{
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
}
