<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TMessages
 *
 * @ORM\Table(name="t_messages")
 * @ORM\Entity
 */
class TMessages extends \Model
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
     * @ORM\Column(name="from_user_id", type="bigint", nullable=false)
     */
    private $fromUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="to_user_ids", type="text", nullable=false)
     */
    private $toUserIds;

    /**
     * @var string
     *
     * @ORM\Column(name="message_status", type="string", length=45, nullable=false)
     */
    private $messageStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=true)
     */
    private $body;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="opened_at", type="datetime", nullable=true)
     */
    private $openedAt;


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
     * Set fromUserId
     *
     * @param integer $fromUserId
     * @return TMessages
     */
    public function setFromUserId($fromUserId)
    {
        $this->fromUserId = $fromUserId;

        return $this;
    }

    /**
     * Get fromUserId
     *
     * @return integer 
     */
    public function getFromUserId()
    {
        return $this->fromUserId;
    }

    /**
     * Set toUserIds
     *
     * @param string $toUserIds
     * @return TMessages
     */
    public function setToUserIds($toUserIds)
    {
        $this->toUserIds = $toUserIds;

        return $this;
    }

    /**
     * Get toUserIds
     *
     * @return string 
     */
    public function getToUserIds()
    {
        return $this->toUserIds;
    }

    /**
     * Set messageStatus
     *
     * @param string $messageStatus
     * @return TMessages
     */
    public function setMessageStatus($messageStatus)
    {
        $this->messageStatus = $messageStatus;

        return $this;
    }

    /**
     * Get messageStatus
     *
     * @return string 
     */
    public function getMessageStatus()
    {
        return $this->messageStatus;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return TMessages
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return TMessages
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TMessages
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
     * Set openedAt
     *
     * @param \DateTime $openedAt
     * @return TMessages
     */
    public function setOpenedAt($openedAt)
    {
        $this->openedAt = $openedAt;

        return $this;
    }

    /**
     * Get openedAt
     *
     * @return \DateTime 
     */
    public function getOpenedAt()
    {
        return $this->openedAt;
    }
}
