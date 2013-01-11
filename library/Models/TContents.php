<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TContents
 *
 * @ORM\Table(name="t_contents")
 * @ORM\Entity
 */
class TContents extends \Model
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
     * @ORM\Column(name="added_by", type="integer", nullable=false)
     */
    private $addedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_title", type="boolean", nullable=true)
     */
    private $showTitle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_comment", type="boolean", nullable=true)
     */
    private $useComment;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text", nullable=true)
     */
    private $descr;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

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
     * Set addedBy
     *
     * @param integer $addedBy
     * @return TContents
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
     * Set code
     *
     * @param string $code
     * @return TContents
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
     * Set lang
     *
     * @param string $lang
     * @return TContents
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
     * @return TContents
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
     * Set type
     *
     * @param string $type
     * @return TContents
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set showTitle
     *
     * @param boolean $showTitle
     * @return TContents
     */
    public function setShowTitle($showTitle)
    {
        $this->showTitle = $showTitle;

        return $this;
    }

    /**
     * Get showTitle
     *
     * @return boolean 
     */
    public function getShowTitle()
    {
        return $this->showTitle;
    }

    /**
     * Set useComment
     *
     * @param boolean $useComment
     * @return TContents
     */
    public function setUseComment($useComment)
    {
        $this->useComment = $useComment;

        return $this;
    }

    /**
     * Get useComment
     *
     * @return boolean 
     */
    public function getUseComment()
    {
        return $this->useComment;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TContents
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
     * Set descr
     *
     * @param string $descr
     * @return TContents
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;

        return $this;
    }

    /**
     * Get descr
     *
     * @return string 
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return TContents
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
     * Set hits
     *
     * @param integer $hits
     * @return TContents
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
     * @return TContents
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
     * @return TContents
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
