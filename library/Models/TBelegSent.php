<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TBelegSent
 *
 * @ORM\Table(name="t_beleg_sent")
 * @ORM\Entity
 */
class TBelegSent extends \Model
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
     * @ORM\Column(name="sender_user_id", type="bigint", nullable=false)
     */
    private $senderUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="reciever_user_id", type="bigint", nullable=false)
     */
    private $recieverUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="beleg_id", type="integer", nullable=false)
     */
    private $belegId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recieved_at", type="datetime", nullable=true)
     */
    private $recievedAt;


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
     * Set senderUserId
     *
     * @param integer $senderUserId
     * @return TBelegSent
     */
    public function setSenderUserId($senderUserId)
    {
        $this->senderUserId = $senderUserId;

        return $this;
    }

    /**
     * Get senderUserId
     *
     * @return integer 
     */
    public function getSenderUserId()
    {
        return $this->senderUserId;
    }

    /**
     * Set recieverUserId
     *
     * @param integer $recieverUserId
     * @return TBelegSent
     */
    public function setRecieverUserId($recieverUserId)
    {
        $this->recieverUserId = $recieverUserId;

        return $this;
    }

    /**
     * Get recieverUserId
     *
     * @return integer 
     */
    public function getRecieverUserId()
    {
        return $this->recieverUserId;
    }

    /**
     * Set belegId
     *
     * @param integer $belegId
     * @return TBelegSent
     */
    public function setBelegId($belegId)
    {
        $this->belegId = $belegId;

        return $this;
    }

    /**
     * Get belegId
     *
     * @return integer 
     */
    public function getBelegId()
    {
        return $this->belegId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TBelegSent
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
     * Set recievedAt
     *
     * @param \DateTime $recievedAt
     * @return TBelegSent
     */
    public function setRecievedAt($recievedAt)
    {
        $this->recievedAt = $recievedAt;

        return $this;
    }

    /**
     * Get recievedAt
     *
     * @return \DateTime 
     */
    public function getRecievedAt()
    {
        return $this->recievedAt;
    }
}
