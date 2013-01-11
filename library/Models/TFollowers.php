<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TFollowers
 *
 * @ORM\Table(name="t_followers")
 * @ORM\Entity
 */
class TFollowers extends \Model
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
     * @var string
     *
     * @ORM\Column(name="follow_type", type="string", nullable=true)
     */
    private $followType;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="follower_id", type="bigint", nullable=false)
     */
    private $followerId;

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
     * Set followType
     *
     * @param string $followType
     * @return TFollowers
     */
    public function setFollowType($followType)
    {
        $this->followType = $followType;

        return $this;
    }

    /**
     * Get followType
     *
     * @return string 
     */
    public function getFollowType()
    {
        return $this->followType;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TFollowers
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
     * Set followerId
     *
     * @param integer $followerId
     * @return TFollowers
     */
    public function setFollowerId($followerId)
    {
        $this->followerId = $followerId;

        return $this;
    }

    /**
     * Get followerId
     *
     * @return integer 
     */
    public function getFollowerId()
    {
        return $this->followerId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TFollowers
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
