<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TDemQuestions
 *
 * @ORM\Table(name="t_dem_questions")
 * @ORM\Entity
 */
class TDemQuestions extends \Model
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="added_by", type="integer", nullable=false)
     */
    private $addedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var boolean
     *
     * @ORM\Column(name="priority", type="boolean", nullable=true)
     */
    private $priority;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumb_up", type="integer", nullable=true)
     */
    private $thumbUp;

    /**
     * @var integer
     *
     * @ORM\Column(name="thumb_down", type="integer", nullable=true)
     */
    private $thumbDown;


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
     * Set addedBy
     *
     * @param integer $addedBy
     * @return TDemQuestions
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy
     *
     * @return integer 
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TDemQuestions
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TDemQuestions
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
     * Set priority
     *
     * @param boolean $priority
     * @return TDemQuestions
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return boolean 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TDemQuestions
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set thumbUp
     *
     * @param integer $thumbUp
     * @return TDemQuestions
     */
    public function setThumbUp($thumbUp)
    {
        $this->thumbUp = $thumbUp;

        return $this;
    }

    /**
     * Get thumbUp
     *
     * @return integer 
     */
    public function getThumbUp()
    {
        return $this->thumbUp;
    }

    /**
     * Set thumbDown
     *
     * @param integer $thumbDown
     * @return TDemQuestions
     */
    public function setThumbDown($thumbDown)
    {
        $this->thumbDown = $thumbDown;

        return $this;
    }

    /**
     * Get thumbDown
     *
     * @return integer 
     */
    public function getThumbDown()
    {
        return $this->thumbDown;
    }
}
