<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TAds
 *
 * @ORM\Table(name="t_ads")
 * @ORM\Entity
 */
class TAds extends \Model
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
     * @ORM\Column(name="ads_code", type="string", length=255, nullable=false)
     */
    private $adsCode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="min_age", type="boolean", nullable=false)
     */
    private $minAge;

    /**
     * @var boolean
     *
     * @ORM\Column(name="max_age", type="boolean", nullable=false)
     */
    private $maxAge;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_hits", type="integer", nullable=false)
     */
    private $maxHits;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_field", type="integer", nullable=false)
     */
    private $maxField;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="html_code", type="text", nullable=true)
     */
    private $htmlCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ads_type", type="string", length=255, nullable=true)
     */
    private $adsType;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views;

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_at", type="datetime", nullable=true)
     */
    private $expireAt;


    /**
     * Get id
     *
     * @return integer 
     */
    private $adsUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="ads_url", type="text", nullable=true)
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adsCode
     *
     * @param string $adsCode
     * @return TAds
     */
    public function setAdsCode($adsCode)
    {
        $this->adsCode = $adsCode;

        return $this;
    }

    /**
     * Set adsUrl
     *
     * @param string $adsUrl
     * @return TAds
     */
    public function setadsUrl($adsUrl)
    {
        $this->adsUrl = $adsUrl;

        return $this;
    }

    /**
     * Get adsCode
     *
     * @return string 
     */
    public function getAdsCode()
    {
        return $this->adsCode;
    }

    /**
     * Get adsUrl
     *
     * @return string 
     */
    public function getadsUrl()
    {
        return $this->adsUrl;
    }

    /**
     * Set minAge
     *
     * @param boolean $minAge
     * @return TAds
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;

        return $this;
    }

    /**
     * Get minAge
     *
     * @return boolean 
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Set maxAge
     *
     * @param boolean $maxAge
     * @return TAds
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;

        return $this;
    }

    /**
     * Get maxAge
     *
     * @return boolean 
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * Set maxHits
     *
     * @param integer $maxHits
     * @return TAds
     */
    public function setMaxHits($maxHits)
    {
        $this->maxHits = $maxHits;

        return $this;
    }

    /**
     * Get maxHits
     *
     * @return integer 
     */
    public function getMaxHits()
    {
        return $this->maxHits;
    }

    /**
     * Set maxField
     *
     * @param integer $maxField
     * @return TAds
     */
    public function setMaxField($maxField)
    {
        $this->maxField = $maxField;

        return $this;
    }

    /**
     * Get maxField
     *
     * @return integer 
     */
    public function getMaxField()
    {
        return $this->maxField;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return TAds
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set htmlCode
     *
     * @param string $htmlCode
     * @return TAds
     */
    public function setHtmlCode($htmlCode)
    {
        $this->htmlCode = $htmlCode;

        return $this;
    }

    /**
     * Get htmlCode
     *
     * @return string 
     */
    public function getHtmlCode()
    {
        return $this->htmlCode;
    }

    /**
     * Set adsType
     *
     * @param string $adsType
     * @return TAds
     */
    public function setAdsType($adsType)
    {
        $this->adsType = $adsType;

        return $this;
    }

    /**
     * Get adsType
     *
     * @return string 
     */
    public function getAdsType()
    {
        return $this->adsType;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return TAds
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     * @return TAds
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer 
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TAds
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
     * Set expireAt
     *
     * @param \DateTime $expireAt
     * @return TAds
     */
    public function setExpireAt($expireAt)
    {
        $this->expireAt = $expireAt;

        return $this;
    }

    /**
     * Get expireAt
     *
     * @return \DateTime 
     */
    public function getExpireAt()
    {
        return $this->expireAt;
    }
}
