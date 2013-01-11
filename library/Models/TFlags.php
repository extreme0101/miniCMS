<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TFlags
 *
 * @ORM\Table(name="t_flags")
 * @ORM\Entity
 */
class TFlags extends \Model
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
     * @ORM\Column(name="added_by", type="bigint", nullable=false)
     */
    private $addedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=true)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="referrar", type="string", length=255, nullable=true)
     */
    private $referrar;

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
     * Set code
     *
     * @param string $code
     * @return TFlags
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
     * @return TFlags
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
     * Set ip
     *
     * @param string $ip
     * @return TFlags
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set referrar
     *
     * @param string $referrar
     * @return TFlags
     */
    public function setReferrar($referrar)
    {
        $this->referrar = $referrar;

        return $this;
    }

    /**
     * Get referrar
     *
     * @return string 
     */
    public function getReferrar()
    {
        return $this->referrar;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return TFlags
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
