<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TUserFamily
 *
 * @ORM\Table(name="t_user_family")
 * @ORM\Entity
 */
class TUserFamily extends \Model
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
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="relation_friend_id", type="bigint", nullable=false)
     */
    private $relationFriendId;

    /**
     * @var integer
     *
     * @ORM\Column(name="relation_id", type="integer", nullable=false)
     */
    private $relationId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=true)
     */
    private $status;

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
     * @return TUserFamily
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
     * Set relationFriendId
     *
     * @param integer $relationFriendId
     * @return TUserFamily
     */
    public function setRelationFriendId($relationFriendId)
    {
        $this->relationFriendId = $relationFriendId;

        return $this;
    }

    /**
     * Get relationFriendId
     *
     * @return integer 
     */
    public function getRelationFriendId()
    {
        return $this->relationFriendId;
    }

    /**
     * Set relationId
     *
     * @param integer $relationId
     * @return TUserFamily
     */
    public function setRelationId($relationId)
    {
        $this->relationId = $relationId;

        return $this;
    }

    /**
     * Get relationId
     *
     * @return integer 
     */
    public function getRelationId()
    {
        return $this->relationId;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return TUserFamily
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TUserFamily
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
