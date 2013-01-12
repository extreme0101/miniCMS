<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TCategories
 *
 * @ORM\Table(name="t_categories")
 * @ORM\Entity
 */
class TCategories extends \Model
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
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="added_by", type="integer", nullable=false)
     */
    private $addedBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=false)
     */
    private $lft;

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false)
     */
    private $rgt;

    /**
     * @var float
     *
     * @ORM\Column(name="pos", type="float", nullable=false)
     */
    private $pos;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=2, nullable=false)
     */
    private $lang;

    /**
     * @var string
     *
     * @ORM\Column(name="st", type="string", length=255, nullable=false)
     */
    private $st;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type", type="string", length=255, nullable=false)
     */
    private $contentType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="attr_href", type="string", length=255, nullable=true)
     */
    private $attrHref;

    /**
     * @var string
     *
     * @ORM\Column(name="attr_title", type="string", length=255, nullable=true)
     */
    private $attrTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="attr_onclick", type="string", length=255, nullable=true)
     */
    private $attrOnclick;

    /**
     * @var string
     *
     * @ORM\Column(name="attr_target", type="string", length=255, nullable=false)
     */
    private $attrTarget;

    /**
     * @var integer
     *
     * @ORM\Column(name="per_page_content", type="integer", nullable=true)
     */
    private $perPageContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=true)
     */
    private $hits;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


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
     * Set parentId
     *
     * @param integer $parentId
     * @return TCategories
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set addedBy
     *
     * @param integer $addedBy
     * @return TCategories
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
     * Set lft
     *
     * @param integer $lft
     * @return TCategories
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return TCategories
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set pos
     *
     * @param float $pos
     * @return TCategories
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get pos
     *
     * @return float 
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return TCategories
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set st
     *
     * @param string $st
     * @return TCategories
     */
    public function setSt($st)
    {
        $this->st = $st;

        return $this;
    }

    /**
     * Get st
     *
     * @return string 
     */
    public function getSt()
    {
        return $this->st;
    }

    /**
     * Set contentType
     *
     * @param string $contentType
     * @return TCategories
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * Get contentType
     *
     * @return string 
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TCategories
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
     * Set attrHref
     *
     * @param string $attrHref
     * @return TCategories
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
     * Set attrTitle
     *
     * @param string $attrTitle
     * @return TCategories
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
     * Set attrOnclick
     *
     * @param string $attrOnclick
     * @return TCategories
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
     * Set attrTarget
     *
     * @param string $attrTarget
     * @return TCategories
     */
    public function setAttrTarget($attrTarget)
    {
        $this->attrTarget = $attrTarget;

        return $this;
    }

    /**
     * Get attrTarget
     *
     * @return string 
     */
    public function getAttrTarget()
    {
        return $this->attrTarget;
    }

    /**
     * Set perPageContent
     *
     * @param integer $perPageContent
     * @return TCategories
     */
    public function setPerPageContent($perPageContent)
    {
        $this->perPageContent = $perPageContent;

        return $this;
    }

    /**
     * Get perPageContent
     *
     * @return integer 
     */
    public function getPerPageContent()
    {
        return $this->perPageContent;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     * @return TCategories
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TCategories
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return TCategories
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="depth", type="integer", nullable=false)
     */
    private $depth;


    /**
     * Set depth
     *
     * @param integer $depth
     * @return TCategories
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return integer 
     */
    public function getDepth()
    {
        return $this->depth;
    }
}
