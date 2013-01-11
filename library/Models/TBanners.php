<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TBanners
 *
 * @ORM\Table(name="t_banners")
 * @ORM\Entity
 */
class TBanners extends \Model
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
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="added_by", type="integer", nullable=false)
     */
    private $addedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="attr_title", type="string", length=255, nullable=true)
     */
    private $attrTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="attr_href", type="string", length=255, nullable=true)
     */
    private $attrHref;

    /**
     * @var string
     *
     * @ORM\Column(name="attr_onclick", type="string", length=255, nullable=true)
     */
    private $attrOnclick;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=true)
     */
    private $hits;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_hits", type="integer", nullable=true)
     */
    private $maxHits;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_clicks", type="integer", nullable=false)
     */
    private $maxClicks;

    /**
     * @var integer
     *
     * @ORM\Column(name="clicked", type="integer", nullable=true)
     */
    private $clicked;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return TBanners
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set addedBy
     *
     * @param integer $addedBy
     * @return TBanners
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
     * Set attrTitle
     *
     * @param string $attrTitle
     * @return TBanners
     */
    public function setAttrTitle($attrTitle)
    {
        $this->attrTitle = $attrTitle;

        return $this;
    }

    /**
     * Get attrTitle
     *
     * @return string 
     */
    public function getAttrTitle()
    {
        return $this->attrTitle;
    }

    /**
     * Set attrHref
     *
     * @param string $attrHref
     * @return TBanners
     */
    public function setAttrHref($attrHref)
    {
        $this->attrHref = $attrHref;

        return $this;
    }

    /**
     * Get attrHref
     *
     * @return string 
     */
    public function getAttrHref()
    {
        return $this->attrHref;
    }

    /**
     * Set attrOnclick
     *
     * @param string $attrOnclick
     * @return TBanners
     */
    public function setAttrOnclick($attrOnclick)
    {
        $this->attrOnclick = $attrOnclick;

        return $this;
    }

    /**
     * Get attrOnclick
     *
     * @return string 
     */
    public function getAttrOnclick()
    {
        return $this->attrOnclick;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TBanners
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TBanners
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
     * Set hits
     *
     * @param integer $hits
     * @return TBanners
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
     * Set maxHits
     *
     * @param integer $maxHits
     * @return TBanners
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
     * Set maxClicks
     *
     * @param integer $maxClicks
     * @return TBanners
     */
    public function setMaxClicks($maxClicks)
    {
        $this->maxClicks = $maxClicks;

        return $this;
    }

    /**
     * Get maxClicks
     *
     * @return integer 
     */
    public function getMaxClicks()
    {
        return $this->maxClicks;
    }

    /**
     * Set clicked
     *
     * @param integer $clicked
     * @return TBanners
     */
    public function setClicked($clicked)
    {
        $this->clicked = $clicked;

        return $this;
    }

    /**
     * Get clicked
     *
     * @return integer 
     */
    public function getClicked()
    {
        return $this->clicked;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TBanners
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
     * Set expireAt
     *
     * @param \DateTime $expireAt
     * @return TBanners
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
