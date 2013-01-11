<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TUserCredits
 *
 * @ORM\Table(name="t_user_credits")
 * @ORM\Entity
 */
class TUserCredits extends \Model
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="income_outcome", type="boolean", nullable=false)
     */
    private $incomeOutcome;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_comment", type="text", nullable=true)
     */
    private $adminComment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;


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
     * Set userId
     *
     * @param integer $userId
     * @return TUserCredits
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set incomeOutcome
     *
     * @param boolean $incomeOutcome
     * @return TUserCredits
     */
    public function setIncomeOutcome($incomeOutcome)
    {
        $this->incomeOutcome = $incomeOutcome;

        return $this;
    }

    /**
     * Get incomeOutcome
     *
     * @return boolean 
     */
    public function getIncomeOutcome()
    {
        return $this->incomeOutcome;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return TUserCredits
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return TUserCredits
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set adminComment
     *
     * @param string $adminComment
     * @return TUserCredits
     */
    public function setAdminComment($adminComment)
    {
        $this->adminComment = $adminComment;

        return $this;
    }

    /**
     * Get adminComment
     *
     * @return string 
     */
    public function getAdminComment()
    {
        return $this->adminComment;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TUserCredits
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
}
