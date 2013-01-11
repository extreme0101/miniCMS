<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TDemAnswers
 *
 * @ORM\Table(name="t_dem_answers")
 * @ORM\Entity
 */
class TDemAnswers extends \Model
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
     * @var integer
     *
     * @ORM\Column(name="question_id", type="integer", nullable=true)
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

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
     * @return TDemAnswers
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
     * Set questionId
     *
     * @param integer $questionId
     * @return TDemAnswers
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer 
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TDemAnswers
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TDemAnswers
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
     * @return TDemAnswers
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
     * @return TDemAnswers
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
