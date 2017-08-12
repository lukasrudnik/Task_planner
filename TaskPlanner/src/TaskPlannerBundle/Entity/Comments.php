<?php
namespace TaskPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="TaskPlannerBundle\Repository\CommentsRepository")
 */
class Comments
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
     * @ORM\Column(name="content", type="string", length=255)
     * @Assert\Length(max="255", maxMessage="The comment is too long!")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Task", inversedBy="comments")
     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     *
     */
    private $task;

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
     * Set content
     *
     * @param string $content
     * @return Comments
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set task
     *
     * @param \TaskPlannerBundle\Entity\Task $task
     * @return Comments
     */
    public function setTask(\TaskPlannerBundle\Entity\Task $task = null)
    {
        $this->task = $task;
        return $this;
    }

    /**
     * Get task
     *
     * @return \TaskPlannerBundle\Entity\Task
     */
    public function getTask()
    {
        return $this->task;
    }
    public function __toString()
    {
        return $this->name;
    }
}
