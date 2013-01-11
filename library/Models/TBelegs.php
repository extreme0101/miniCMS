<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TBelegs
 *
 * @ORM\Table(name="t_belegs")
 * @ORM\Entity
 */
class TBelegs extends \Model
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
     * @ORM\Column(name="added_by", type="bigint", nullable=false)
     */
    private $addedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="is_free", type="string", nullable=true)
     */
    private $isFree;

    /**
     * @var string
     *
     * @ORM\Column(name="beleg_type", type="string", nullable=true)
     */
    private $belegType;

    /**
     * @var string
     *
     * @ORM\Column(name="beleg_type_code", type="string", length=255, nullable=true)
     */
    private $belegTypeCode;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=255, nullable=true)
     */
    private $currencyCode;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

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
     * Set addedBy
     *
     * @param integer $addedBy
     * @return TBelegs
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
     * Set isFree
     *
     * @param string $isFree
     * @return TBelegs
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
     * Set belegType
     *
     * @param string $belegType
     * @return TBelegs
     */
    public function setBelegType($belegType)
    {
        $this->belegType = $belegType;

        return $this;
    }

    /**
     * Get belegType
     *
     * @return string 
     */
    public function getBelegType()
    {
        return $this->belegType;
    }

    /**
     * Set belegTypeCode
     *
     * @param string $belegTypeCode
     * @return TBelegs
     */
    public function setBelegTypeCode($belegTypeCode)
    {
        $this->belegTypeCode = $belegTypeCode;

        return $this;
    }

    /**
     * Get belegTypeCode
     *
     * @return string 
     */
    public function getBelegTypeCode()
    {
        return $this->belegTypeCode;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return TBelegs
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set currencyCode
     *
     * @param string $currencyCode
     * @return TBelegs
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode
     *
     * @return string 
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TBelegs
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
     * Set comment
     *
     * @param string $comment
     * @return TBelegs
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TBelegs
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
