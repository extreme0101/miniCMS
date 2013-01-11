<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TUserLoginHistory
 *
 * @ORM\Table(name="t_user_login_history")
 * @ORM\Entity
 */
class TUserLoginHistory extends \Model
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="login_datetime", type="datetime", nullable=true)
     */
    private $loginDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="login_ip", type="string", length=255, nullable=true)
     */
    private $loginIp;

    /**
     * @var string
     *
     * @ORM\Column(name="other", type="text", nullable=true)
     */
    private $other;


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
     * @return TUserLoginHistory
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
     * Set loginDatetime
     *
     * @param \DateTime $loginDatetime
     * @return TUserLoginHistory
     */
    public function setLoginDatetime($loginDatetime)
    {
        $this->loginDatetime = $loginDatetime;

        return $this;
    }

    /**
     * Get loginDatetime
     *
     * @return \DateTime 
     */
    public function getLoginDatetime()
    {
        return $this->loginDatetime;
    }

    /**
     * Set loginIp
     *
     * @param string $loginIp
     * @return TUserLoginHistory
     */
    public function setLoginIp($loginIp)
    {
        $this->loginIp = $loginIp;

        return $this;
    }

    /**
     * Get loginIp
     *
     * @return string 
     */
    public function getLoginIp()
    {
        return $this->loginIp;
    }

    /**
     * Set other
     *
     * @param string $other
     * @return TUserLoginHistory
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Get other
     *
     * @return string 
     */
    public function getOther()
    {
        return $this->other;
    }
}
