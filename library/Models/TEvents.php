<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TEvents
 *
 * @ORM\Table(name="t_events")
 * @ORM\Entity
 */
class TEvents extends \Model
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
     * @var string
     *
     * @ORM\Column(name="event_type", type="string", nullable=true)
     */
    private $eventType;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_code", type="string", length=255, nullable=true)
     */
    private $photoCode;

    /**
     * @var string
     *
     * @ORM\Column(name="location_code", type="string", length=255, nullable=true)
     */
    private $locationCode;

    /**
     * @var string
     *
     * @ORM\Column(name="is_free", type="string", nullable=true)
     */
    private $isFree;

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
     * @var string
     *
     * @ORM\Column(name="organizer_type", type="string", nullable=true)
     */
    private $organizerType;

    /**
     * @var string
     *
     * @ORM\Column(name="organizer_name", type="string", length=255, nullable=true)
     */
    private $organizerName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=255, nullable=true)
     */
    private $contactName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_phone", type="string", length=255, nullable=true)
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_address", type="string", length=255, nullable=true)
     */
    private $contactAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_facebook", type="string", length=255, nullable=true)
     */
    private $contactFacebook;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_twitter", type="string", length=255, nullable=true)
     */
    private $contactTwitter;

    /**
     * @var string
     *
     * @ORM\Column(name="other_info", type="string", length=255, nullable=true)
     */
    private $otherInfo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_date", type="datetime", nullable=true)
     */
    private $eventDate;

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
     * @return TEvents
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
     * Set eventType
     *
     * @param string $eventType
     * @return TEvents
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return string 
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set photoCode
     *
     * @param string $photoCode
     * @return TEvents
     */
    public function setPhotoCode($photoCode)
    {
        $this->photoCode = $photoCode;

        return $this;
    }

    /**
     * Get photoCode
     *
     * @return string 
     */
    public function getPhotoCode()
    {
        return $this->photoCode;
    }

    /**
     * Set locationCode
     *
     * @param string $locationCode
     * @return TEvents
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Get locationCode
     *
     * @return string 
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Set isFree
     *
     * @param string $isFree
     * @return TEvents
     */
    public function setIsFree($isFree)
    {
        $this->isFree = $isFree;

        return $this;
    }

    /**
     * Get isFree
     *
     * @return string 
     */
    public function getIsFree()
    {
        return $this->isFree;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TEvents
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
     * @return TEvents
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
     * Set organizerType
     *
     * @param string $organizerType
     * @return TEvents
     */
    public function setOrganizerType($organizerType)
    {
        $this->organizerType = $organizerType;

        return $this;
    }

    /**
     * Get organizerType
     *
     * @return string 
     */
    public function getOrganizerType()
    {
        return $this->organizerType;
    }

    /**
     * Set organizerName
     *
     * @param string $organizerName
     * @return TEvents
     */
    public function setOrganizerName($organizerName)
    {
        $this->organizerName = $organizerName;

        return $this;
    }

    /**
     * Get organizerName
     *
     * @return string 
     */
    public function getOrganizerName()
    {
        return $this->organizerName;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return TEvents
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     * @return TEvents
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string 
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     * @return TEvents
     */
    public function setContactAddress($contactAddress)
    {
        $this->contactAddress = $contactAddress;

        return $this;
    }

    /**
     * Get contactAddress
     *
     * @return string 
     */
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Set contactFacebook
     *
     * @param string $contactFacebook
     * @return TEvents
     */
    public function setContactFacebook($contactFacebook)
    {
        $this->contactFacebook = $contactFacebook;

        return $this;
    }

    /**
     * Get contactFacebook
     *
     * @return string 
     */
    public function getContactFacebook()
    {
        return $this->contactFacebook;
    }

    /**
     * Set contactTwitter
     *
     * @param string $contactTwitter
     * @return TEvents
     */
    public function setContactTwitter($contactTwitter)
    {
        $this->contactTwitter = $contactTwitter;

        return $this;
    }

    /**
     * Get contactTwitter
     *
     * @return string 
     */
    public function getContactTwitter()
    {
        return $this->contactTwitter;
    }

    /**
     * Set otherInfo
     *
     * @param string $otherInfo
     * @return TEvents
     */
    public function setOtherInfo($otherInfo)
    {
        $this->otherInfo = $otherInfo;

        return $this;
    }

    /**
     * Get otherInfo
     *
     * @return string 
     */
    public function getOtherInfo()
    {
        return $this->otherInfo;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     * @return TEvents
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime 
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TEvents
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
