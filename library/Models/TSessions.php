<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TSessions
 *
 * @ORM\Table(name="t_sessions")
 * @ORM\Entity
 */
class TSessions extends \Model
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sess_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessId;

    /**
     * @var string
     *
     * @ORM\Column(name="sess_data", type="text", nullable=true)
     */
    private $sessData;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sess_time", type="time", nullable=true)
     */
    private $sessTime;


    /**
     * Get sessId
     *
     * @return integer 
     */
    public function getSessId()
    {
        return $this->sessId;
    }

    /**
     * Set sessData
     *
     * @param string $sessData
     * @return TSessions
     */
    public function setSessData($sessData)
    {
        $this->sessData = $sessData;

        return $this;
    }

    /**
     * Get sessData
     *
     * @return string 
     */
    public function getSessData()
    {
        return $this->sessData;
    }

    /**
     * Set sessTime
     *
     * @param \DateTime $sessTime
     * @return TSessions
     */
    public function setSessTime($sessTime)
    {
        $this->sessTime = $sessTime;

        return $this;
    }

    /**
     * Get sessTime
     *
     * @return \DateTime 
     */
    public function getSessTime()
    {
        return $this->sessTime;
    }
}
