<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TAdmins
 *
 * @ORM\Table(name="t_admins")
 * @ORM\Entity
 */
class TAdmins extends \Model
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
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="write", type="boolean", nullable=true)
     */
    private $write;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete", type="boolean", nullable=true)
     */
    private $delete;

    /**
     * @var integer
     *
     * @ORM\Column(name="added_by", type="bigint", nullable=false)
     */
    private $addedBy;


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
     * @return TAdmins
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
     * Set userId
     *
     * @param integer $userId
     * @return TAdmins
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
     * Set write
     *
     * @param boolean $write
     * @return TAdmins
     */
    public function setWrite($write)
    {
        $this->write = $write;

        return $this;
    }

    /**
     * Get write
     *
     * @return boolean 
     */
    public function getWrite()
    {
        return $this->write;
    }

    /**
     * Set delete
     *
     * @param boolean $delete
     * @return TAdmins
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;

        return $this;
    }

    /**
     * Get delete
     *
     * @return boolean 
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Set addedBy
     *
     * @param integer $addedBy
     * @return TAdmins
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
}
