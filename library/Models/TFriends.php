<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TFriends
 *
 * @ORM\Table(name="t_friends")
 * @ORM\Entity
 */
class TFriends extends \Model
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
     * @ORM\Column(name="friend_type_id", type="integer", nullable=true)
     */
    private $friendTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="friends", type="string", length=255, nullable=true)
     */
    private $friends;

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
     * Set friendTypeId
     *
     * @param integer $friendTypeId
     * @return TFriends
     */
    public function setFriendTypeId($friendTypeId)
    {
        $this->friendTypeId = $friendTypeId;

        return $this;
    }

    /**
     * Get friendTypeId
     *
     * @return integer 
     */
    public function getFriendTypeId()
    {
        return $this->friendTypeId;
    }

    /**
     * Set friends
     *
     * @param string $friends
     * @return TFriends
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * Get friends
     *
     * @return string 
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TFriends
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
